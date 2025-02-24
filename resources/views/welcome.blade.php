<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easy Tickets</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<body>

    <!-- Navbar -->
    <nav>
        <div class="container">
            <h3>Easy Tickets</h3>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#events">Events</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="{{ url('/register') }}" class="btn">Sign In</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home">
        <div class="hero">
            <h1>Welcome to Easy Tickets</h1>
            <p>Book your favorite events easily & securely.</p>
            <a href="#events" class="btn">Explore Events</a>
        </div>
    </section>

    <!-- Events Section -->
    <section id="events">
        <div class="container">
            <h2>Upcoming Events</h2>
            <div class="event-list">
                <div class="event-card">
                    <h3>Concert Night</h3>
                    <p>Join us for an unforgettable night of music.</p>
                    <a href="/register">Book Now</a>
                </div>
                <div class="event-card">
                    <h3>Comedy Show</h3>
                    <p>Laugh out loud with top comedians.</p>
                    <a href="/register">Book Now</a>
                </div>
                <div class="event-card">
                    <h3>Tech Conference</h3>
                    <p>Stay ahead with the latest tech trends.</p>
                    <a href="/register">Book Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <h2>About Us</h2>
            <p>Easy Tickets is your go-to platform for booking exciting events. We offer a seamless experience for event-goers and organizers alike.</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <p>Email: support@easytickets.com</p>
            <p>Phone: +27 29 919 2226</p>
            <p>Address:  229 McDonald Cresent, Sanlam Mall, Johannesburg</p>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Easy Tickets. All rights reserved.</p>
    </footer>

</body>
</html>
