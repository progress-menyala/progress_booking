<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            padding: 20px;
        }
        .header img {
            width: 150px;
        }
        .content {
            text-align: center;
            padding: 20px;
        }
        .content h1 {
            color: #333;
        }
        .content p {
            color: #666;
            font-size: 16px;
        }
        .footer {
            text-align: center;
            padding: 20px;
            border-top: 1px solid #ddd;
            color: #999;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="https://example.com/logo.png" alt="Company Logo">
        </div>
        <div class="content">
            <h1>Thank You!</h1>
            <p>Dear {{ $data['customer_name'] }},</p>
            <p>Thank you for purchasing tickets for our tour. We appreciate your support and are excited to have you join us!</p>
            <p>Your booking details are as follows:</p>
            <ul style="list-style-type: none; padding: 0; text-align: left; margin: 0 auto; display: inline-block;">
                <li><strong>Booking Code:</strong> {{ $data['booking_code'] }}</li>
                <li><strong>Tour Package:</strong> {{ $data['tour'] }}</li>
                <li><strong>Total Amount:</strong> Rp. {{ $data['grand_total'] }}</li>
            </ul>
            <p>If you have any questions or need further assistance, please feel free to contact us at info@trekker.com</p>
            <p>Best Regards,</p>
            <p>Trekker</p>
        </div>
        <div class="footer">
            &copy; Tio Mahesa. All rights reserved.
        </div>
    </div>
</body>
</html>
