<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Order Has Been Cancelled</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #f44336;
        }

        p {
            margin: 10px 0;
        }

        .footer {
            font-size: 0.9em;
            color: #666;
            margin-top: 20px;
            text-align: center;
        }

        .footer a {
            color: #4CAF50;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Hello {{$name}},</h1>
        <p>We regret to inform you that your order has been cancelled.</p>
        <p><strong>Reason for Cancellation:</strong> {{$reason}}</p>
        <p>For more details or assistance, please contact the designer at {{$designerEmail}}.</p>
        <p>If you have any questions or need further assistance, feel free to reach out.</p>
        <p>We apologize for any inconvenience this may have caused and appreciate your understanding.</p>
        <div class="footer">
            <p>Best regards,<br>The Tel-A Team</p>
            <p><a href="https://www.Tel-A.com">Visit our website</a></p>
        </div>
    </div>
</body>

</html>