<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/styles.css')
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h1><a href="list link">Planning your next event? Click here to list your event now!</a></h1>
    </header>
    <nav>
        <img src="">Easy Tickets>
        <a href="logo/ home link">Easy Tickets</a>
        <a href="/">Home</a>
        <a href="/contact">Contact</a>
    </nav>
    <main>
        @yield('content')
    </main>
</body>
</html>
