<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Cancelled</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container error">
        <h2>Payment Cancelled ❌</h2>
        <p>Your payment was cancelled. Please try again.</p>
        <a href="{{ url('/') }}" class="btn">Back to Home</a>
    </div>
</body>
</html>
