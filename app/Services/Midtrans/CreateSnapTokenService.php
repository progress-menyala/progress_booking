<?php

namespace App\Services\Midtrans;

use Midtrans\Snap;

class CreateSnapTokenService extends Midtrans
{
    protected $booking;
    protected $tour;

    public function __construct($booking, $tour)
    {
        parent::__construct();
        // dd($booking, $tour);

        $this->booking = $booking;
        $this->tour = $tour;
    }

    public function getSnapToken()
    {
        // Hitung gross_amount dengan menjumlahkan semua item
        $grossAmount = $this->booking->sub_total +
                    ($this->booking->sub_total * $this->booking->tax / 100) +
                    ($this->booking->sub_total * $this->booking->admin_fee / 100) +
                    ($this->booking->sub_total * $this->booking->payment_fee / 100);

        // Item details hanya berisi item yang dikenali oleh Midtrans
        $itemDetails = [
            [
                'id' => $this->booking->id,
                'price' => $this->booking->sub_total,
                'quantity' => 1,
                'name' => $this->tour->name
            ],
            [
                'id' => 'tax',
                'price' => $this->booking->sub_total * $this->booking->tax / 100,
                'quantity' => 1,
                'name' => 'Tax'
            ],
            [
                'id' => 'admin_fee',
                'price' => $this->booking->sub_total * $this->booking->admin_fee / 100,
                'quantity' => 1,
                'name' => 'Admin Fee'
            ],
            [
                'id' => 'payment_fee',
                'price' => $this->booking->sub_total * $this->booking->payment_fee / 100,
                'quantity' => 1,
                'name' => 'Payment Fee'
            ]
        ];

        $params = [
            'transaction_details' => [
                'order_id' => $this->booking->code,
                'gross_amount' => $grossAmount, // Gunakan grossAmount yang telah dihitung
            ],
            'item_details' => $itemDetails,
            'customer_details' => [
                'first_name' => $this->booking->customer_name,
                'email' => $this->booking->customer_email,
                'phone' => $this->booking->phone_number,
            ]
        ];

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        return $snapToken;
    }

}