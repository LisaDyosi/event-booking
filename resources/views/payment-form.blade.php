<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <script src="https://js.stripe.com/v3/"></script>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h2>Enter Payment Details</h2>
        <form action="{{ route('charge', ['event' => $event->id]) }}" method="POST" id="payment-form">
            @csrf
            <label for="card-element">Credit or debit card</label>
            <div id="card-element" class="card-input"></div>
            <button type="submit" class="btn">Pay R{{ $event->ticket_price }}</button>
        </form>
    </div>

    <script>
        var stripe = Stripe("{{ env('STRIPE_KEY') }}");
        var elements = stripe.elements();
        var card = elements.create("card");
        card.mount("#card-element");
    </script>
</body>
</html>
