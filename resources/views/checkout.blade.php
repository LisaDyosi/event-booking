<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h2>Checkout for {{ $event->name }}</h2>
        <p>Price: ${{ $event->ticket_price }}</p>
        
        <a href="{{ route('payment.form', ['event' => $event->id]) }}" class="btn">Proceed to Payment</a>
    </div>
</body>
</html>
