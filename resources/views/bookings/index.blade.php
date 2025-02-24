
<x-app-layout>
    <h2>Your Bookings</h2>
    <table>
        <tr>
            <th>Event</th>
            <th>Status</th>
        </tr>
        @foreach ($bookings as $booking)
            <tr>
                <td>{{ $booking->event->name }}</td>
                <td>{{ $booking->payment_status }}</td>
            </tr>
        @endforeach
    </table>
</x-app-layout>
