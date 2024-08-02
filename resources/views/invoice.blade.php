<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
</head>
<body style="font-family: Arial, sans-serif;">
    
    {{-- @dd($data) --}}
    <table style="width: 100%;">
        <tr>
            <td style="width: 50%;">
                {{-- <img src="{{ asset('laraveldaily.png') }}" alt="laravel daily" width="200" /> --}}
            </td>
            <td style="width: 50%; text-align: right;">
                <h2>Invoice ID: {{ $data['booking_code'] }}</h2>
            </td>
        </tr>
    </table>

    <div style="margin-top: 1.25rem;">
        <table style="width: 100%;">
            <tr>
                <td style="width: 50%;">
                    <div><h4 style="margin: 0;">To:</h4></div>
                    <div>{{ $data['customer_name'] }}</div>
                    <div>{{ $data['customer_email'] }}</div>
                    <div>{{ $data['phone_number'] }}</div>
                </td>
                <td style="width: 50%;">
                    <div><h4 style="margin: 0;">From:</h4></div>
                    <div>Trekker</div>
                    <div>London</div>
                </td>
            </tr>
        </table>
    </div>

    <div style="margin-top: 1.25rem;">
        <table style="width: 100%; border-spacing: 0; font-size: 0.875rem;">
            <tr style="background-color: rgb(96, 165, 250);">
                <th style="color: #ffffff; padding: 0.5rem;">#</th>
                <th style="color: #ffffff; padding: 0.5rem;">Name</th>
                <th style="color: #ffffff; padding: 0.5rem;">Sub Total</th>
                <th style="color: #ffffff; padding: 0.5rem;">Tax(%)</th>
                <th style="color: #ffffff; padding: 0.5rem;">Admin(%)</th>
                <th style="color: #ffffff; padding: 0.5rem;">Paymen(%)</th>
            </tr>
            <tr style="background-color: rgb(241, 245, 249);">
                <td style="padding: 0.5rem;">#</td>
                <td style="padding: 0.5rem;">
                    <h2 style="padding: 0;margin-bottom:0;">{{ $data['tour'] }}</h2>
                    <p style="padding: 0;margin-bottom:0;font-style:light;">Organized : {{ $data['organizer'] }}</p>
                    <p style="padding: 0;margin-top:0;font-style:light;">Contact : {{ $data['email_org'] . '  ||  ' . $data['phone_org'] }}</p>
                </td>
                <td style="padding: 0.5rem;text-align: center;">Rp. {{ $data['sub_total'] }}</td>
                <td style="padding: 0.5rem;text-align: center;">{{ $data['tax'] }}</td>
                <td style="padding: 0.5rem;text-align: center;">{{ $data['admin_fee'] }}</td>
                <td style="padding: 0.5rem;text-align: center;">{{ $data['payment_fee'] }}</td>
            </tr>
        </table>
    </div>

    <div style="text-align: right; margin-top: 1rem; font-size: 1.5rem;font-weight:bold;">
        Total: Rp. {{ $data['grand_total'] }}
    </div>

    <div style="font-size: 0.875rem; padding: 1rem; background-color: rgb(241, 245, 249); margin-top: 1.25rem; text-align: center;">
        <div>Thank you</div>
        <div>&copy; Tio Mahesa  </div>
    </div>

</body>
</html>
