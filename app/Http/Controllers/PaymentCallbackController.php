<?php

namespace App\Http\Controllers;

use Log;
use App\Models\Order;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Services\Midtrans\CallbackService;

class PaymentCallbackController extends Controller
{
    public function receive(Request $request)
    {
        \Log::info('Midtrans Notification received: ' . json_encode($request->all()));
        return response()->json(['status' => 'received'], 200);

        // dd('masuk');

        $callback = new CallbackService;

        if ($callback->isSignatureKeyVerified()) {
            $notification = $callback->getNotification();
            $booking = $callback->getBooking();

            if ($callback->isSuccess()) {
                Booking::where('code', $booking->code)->update([
                    'status' => 'paid',
                ]);
            }

            if ($callback->isExpire()) {
                Booking::where('code', $booking->code)->update([
                    'status' => 'expire',
                ]);
            }

            if ($callback->isCancelled()) {
                Booking::where('code', $booking->code)->update([
                    'status' => 'cancelled',
                ]);
            }

            return response()
                ->json([
                    'success' => true,
                    'message' => 'Notification successfully processed',
                ]);
        } else {
            return response()
                ->json([
                    'error' => true,
                    'message' => 'Signature key not verified',
                ], 403);
        }
    }
}