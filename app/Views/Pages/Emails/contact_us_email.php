<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contact Form Enquiry</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .email-wrapper {
            background-color: #fff;
            max-width: 600px;
            margin: 30px auto;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        .header {
            border-bottom: 3px solid #d32f2f;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        h2 {
            color: #d32f2f;
        }
        p {
            font-size: 15px;
            line-height: 1.6;
        }
        .footer {
            margin-top: 25px;
            border-top: 1px solid #ddd;
            padding-top: 10px;
            text-align: center;
            font-size: 13px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="email-wrapper">
        <div class="header">
            <h2>New Contact Message</h2>
        </div>
        <p><strong>Name:</strong> <?= esc($full_name) ?></p>
        <p><strong>Email:</strong> <?= esc($email) ?></p>
        <p><strong>Mobile:</strong> <?= esc($mobile) ?></p>
        <p><strong>Message:</strong><br><?= nl2br(esc($message)) ?></p>
        <div class="footer">
            <p>Sent from MPM Mumbai Website Contact Form</p>
        </div>
    </div>
</body>
</html>
