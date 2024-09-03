<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Template with Images and Social Media</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* General styling */
        body {
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }

        table {
            border-spacing: 0;
            width: 100%;
        }

        td {
            padding: 0;
        }

        img {
            border: 0;
            display: block;
            max-width: 100%;
            height: auto;
        }

        /* Main container */
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
        }

        /* Header */
        .email-header {
            background-color: #4CAF50;
            text-align: center;
            padding: 20px;
        }

        .email-header img {
            max-width: 100%;
            height: auto;
        }

        /* Body */
        .email-body {
            padding: 20px;
        }

        .email-body p {
            font-size: 16px;
            line-height: 1.5;
            color: #333333;
        }

        /* Button */
        .email-button {
            display: inline-block;
            background-color: #4CAF50;
            color: #ffffff;
            padding: 12px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin: 20px 0;
        }

        /* Footer */
        .email-footer {
            background-color: #f4f4f4;
            text-align: center;
            padding: 20px 10px;
            font-size: 14px;
            color: #888888;
        }

        .email-footer a {
            color: #4CAF50;
            text-decoration: none;
        }

        /* Social Media Icons */
        .social-icons {
            margin: 10px 0;
            display: flex;
            justify-content: center;
            /* Center the icons */
            gap: 10px;
            /* 10px gap between icons */
        }

        .social-icons a img {
            width: 32px;
            height: 32px;
        }

        /* Responsive adjustments */
        @media screen and (max-width: 600px) {
            .email-container {
                width: 100%;
                margin: 10px auto;
            }

            .email-body {
                padding: 15px;
            }

            .email-button {
                width: 90%;
                text-align: center;
                padding: 15px;
            }

            .social-icons a img {
                width: 24px;
                height: 24px;
            }
        }
    </style>
</head>

<body>
    <table class="email-container" width="100%" cellpadding="0" cellspacing="0">
        <!-- Header -->
        <tr>
            <td class="email-header">
                <!-- Replace the src with your logo or header image URL -->
                <img src="https://via.placeholder.com/600x150.png?text=Welcome+to+Our+Service" alt="Header Image">
            </td>
        </tr>

        <!-- Body -->
        <tr>
            <td class="email-body">
                <p>Hello {name},</p>
                <p>Thank you for Connecting With Us. We're excited to have you on board!</p>
                <p>Please click the button below to verify your email address and get started:</p>
                <center><a href="#" class="email-button">Verify Email</a></center>
                <p>If you have any questions, feel free to reply to this email. We're here to help!</p>
                <p>Best regards,<br> The Team</p>
            </td>
        </tr>

        <!-- Footer -->
        <tr>
            <td class="email-footer">

                <p>&copy; 2024 Our Company. All rights reserved.</p>
                <p><a href="#">Unsubscribe</a> | <a href="#">Privacy Policy</a></p>
            </td>
        </tr>
    </table>
</body>

</html>