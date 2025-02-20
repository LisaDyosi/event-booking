<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container success">
        <h2>Payment Successful 🎉</h2>
        <p>Thank you for your payment. You will recieve your ticket via email!</p>
        <a href="{{ url('/dashboard') }}" class="btn">Back to Home</a>
    </div>
</body>
</html>
