<?php

namespace App\Http\Controllers;

use Xendit\Invoice;
use App\Models\Booking;
use App\Mail\InvoiceMail;
use Xendit\Configuration;
use App\Models\TourPackage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Xendit\Invoice\InvoiceApi;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;
use Xendit\Invoice\CreateInvoiceRequest;
use App\Services\Midtrans\CreateSnapTokenService;

class BookingController extends Controller
{
    public function __construct()
    {
        Configuration::setXenditKey('xnd_development_AFGSuEywpY3rACCgNTWgJ7n0zhuqaAMoXPuygQz5DmCiMJST8gglfONArVH1');
    }
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        // dd($checkout);
        $tour = TourPackage::find($id);
        return view('frontpage.booking.cart', [
            'tour' => $tour
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all()); 
        $code = Str::random(5);  
        $request->validate([
            'tour_package_id' => 'required',
        ]);

        $booking = Booking::create([
            'user_id' => $request->user_id ?? null,
            'tour_package_id' => $request->tour_package_id,
            'payment_method_id' => $request->payment_method_id ?? null,
            'booking_date' => now(),
            'status' => 'hold',
            'total' => $request->total ?? null,
            'code' => $code, // Unique code
            'customer_email' => $request->customer_email ?? null,
            'customer_name' => $request->customer_name ?? null,
            'customer_id' => $request->customer_id ?? null,
            'phone_number' => $request->phone_number ?? null,
            'expired_at' => now()->addDays(3), // Set expiration date
            'sub_total' => $request->sub_total ?? null,
            'admin_fee' => $request->admin_fee ?? null,
            'payment_fee' => $request->payment_fee ?? null,
            'tax' => $request->tax ?? null,
            'grand_total' => $request->grand_total ?? 177000,
            'voucher' => $request->voucher ?? null,
            'snap_token' => $request->snap_token ?? null,
        ]);

        return redirect()->route('checkout.payment', ['id' => $booking->id])->with('success', 'Booking detail created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function payment($id)
    {

        $booking = Booking::find($id);
        $tour_package = TourPackage::find($booking->tour_package_id);

        // $snapToken = $booking->snap_token;
        //  if (is_null($snapToken)) {
        //      // If snap token is still NULL, generate snap token and save it to database

        //      $midtrans = new CreateSnapTokenService($booking, $tour_package);
        //      $snapToken = $midtrans->getSnapToken();

        //      $booking->snap_token = $snapToken;
        //      $booking->save();
        //  }

        return view('frontpage.booking.checkout', [
            'booking' => $booking,
            'tour' => $tour_package,
        ]);
    }

    public function paymentXendit(Request $request)
    {
        $booking = Booking::find($request->booking_id);
        // dd($booking);
        // $tour_package = TourPackage::find($booking->tour_package_id);
        $uuid = (string) Str::uuid();

        $external_id = $booking->code;
        $amount = $booking->grand_total;
        $description = 'Payment for booking ' . $booking->code;

    //    call Xendit
        $apiInstance = new InvoiceApi();
        $createInvoiceRequest = new CreateInvoiceRequest([
            'external_id' => $uuid,
            'description' => $description,
            'amount' => $amount,
            'currency' => 'IDR',
            'customer' => array(
                'name' => $booking->customer_name,
                'email' => $booking->customer_email,
                'phone' => $booking->phone_number
            ),
            'success_redirect_url' => @env('APP_URL') . '/notification/' . $uuid,
            'failure_redirect_url' => 'http://localhost:8000/',
        ]);

        try {
            $result = $apiInstance->createInvoice($createInvoiceRequest);

            $booking->update([
                'checkout_link' => $result['invoice_url'],
                'external_id' => $uuid,
                'status' => 'hold'
            ]);

            return redirect($result['invoice_url']);
                
        } catch (\Xendit\XenditSdkException $e) {
            echo 'Exception when calling InvoiceApi->createInvoice: ', $e->getMessage(), PHP_EOL;
            echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
        }
 
    }

    public function xenditNotification($id)
    {
        $apiInstance = new InvoiceApi();

        $result = $apiInstance->getInvoices(null, $id);

        // get data
        $booking = Booking::where('external_id', $id)->firstOrFail();
        if($booking->status == 'settled'){
            return response()->json('Payment anda telah berhasil diproses');
        }
        
        $this->sendInvoice($booking->id);
        $booking->status =  $result[0]['status'];
        $booking->save();
        return redirect()->route('checkout.payment', ['id' => $booking->id])->with('success', 'Payment success');

    }

    public function sendInvoice($id) 
    {
        // $id = 44;
        $booking = Booking::find($id);
        // dd($booking, $booking->tourPackage->organizer_profiles);
        // dd($booking->tourPackage->organizer_profiles->name, $booking->tourPackage->organizer_profiles->email, $booking->tourPackage->organizer_profiles->phone);
        $data = [
                'quantity' => 1,
                'tour' => $booking->tourPackage->name,
                'organizer' => $booking->tourPackage->organizer_profiles->name,
                'email_org' => $booking->tourPackage->organizer_profiles->email,
                'phone_org' => $booking->tourPackage->organizer_profiles->phone,
                'price' => $booking->sub_total,
                'admin_fee' => $booking->admin_fee,
                'sub_total' => $booking->sub_total,
                'payment_fee' => $booking->payment_fee,
                'tax' => $booking->tax,
                'grand_total' => $booking->grand_total,
                'customer_name' => $booking->customer_name,
                'customer_email' => $booking->customer_email,
                'phone_number' => $booking->phone_number,
                'booking_date' => $booking->booking_date,
                'booking_code' => $booking->code,
        ];

        $pdf = Pdf::loadView('invoice', ['data' => $data]);
        $invoicePdf = $pdf->output();

        Mail::to($booking->customer_email)
        ->send(new InvoiceMail($data, $invoicePdf));
     
        // $pdf = Pdf::loadView('invoice', ['data' => $data]);

        // return view('invoice', ['data' => $data]);
        
        // return $pdf->stream();
    }


}
