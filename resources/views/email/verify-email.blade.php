<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Account Verification</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gloock&display=swap" rel="stylesheet">

    <style>
        /* Email styles */
        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.5;
            color: #333;
            margin: 0;
            padding: 0;
            font-family: 'Gloock', serif;
        }

        table {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            border-collapse: collapse;
        }

        td {
            padding: 20px;
            border: 1px solid #ddd;
            text-align: center;
        }

        h1 {
            font-size: 28px;
            margin-bottom: 30px;
            text-align: center;
        }

        p {
            margin-bottom: 20px;
        }

        .code {
            font-size: 24px;
            font-weight: bold;
            color: #2b2d42;
        }

        .button {
            display: inline-block;
            background-color: #2b2d42;
            color: #fff;
            font-size: 18px;
            font-weight: bold;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .button:hover {
            background-color: #333;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <td>
                <h1>Account Verification</h1>
                <p>Please use the following verification link to activate your account:</p>
                <a class="button" href="{{ $body }}">Verify Account</a>
                <br>or click on the link below.
                <a href="{{ $body }}">
                    <p>{{ $body }}</p>
                </a>
                <p>This link will expire soon.</p>
                <p>If you did not request this verification link, please disregard this email.</p>
                <p>Thank you for using our service!</p>
            </td>
        </tr>
        <tr>
            <td style="text-align: center">
                <p>Development By <a href="">Global Fast Coder</a></p>
            </td>
        </tr>
    </table>
</body>

</html>
