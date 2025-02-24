<!DOCTYPE html>
<html>
<head>
    <title>Ticket Confirmation</title>
</head>
<body>
    <h2>Booking Confirmed!</h2>
    <p>Dear {{ $booking->user->name }},</p>
    <p>You have successfully booked a ticket for:</p>

    <h3>{{ $booking->event->name }}</h3>
    <p><strong>Date:</strong> {{ $booking->event->date }}</p>
    <p><strong>Location:</strong> {{ $booking->event->location }}</p>

    <p>Your payment has been received. Please present this email as your ticket at the event entrance.</p>

    <p>Thank you for booking with us!</p>

    <p><strong>Best Regards,<br>Easy Tickets</strong></p>
</body>
</html>
