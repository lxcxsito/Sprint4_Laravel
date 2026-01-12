<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    @stack('styles')
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a  href="{{ route('home.index') }}"><i class="fa-solid fa-house fa-2x"></i> Home</a></li>
                <li><a  href="{{ route('listGames.index') }}" ><i class="fa-solid fa-gamepad fa-2x"></i> Games</a></li>
                <li><a><i class="fa-solid fa-cart-shopping fa-2x"></i> Cart</a></li>
                <li><a  href="{{ route('login.index') }}"><i class="fa-solid fa-user fa-2x"></i> Login</a></li>

            </ul>
        </nav>
</header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2026 GameZone</p>
    </footer>
</body>
</html>
