<!DOCTYPE html>
<html>
    <head>
        @section('head')
        <script>
            const BASE_URL = "{{ url('/') }}/";
        </script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Radio+Canada:wght@700&display=swap" rel="stylesheet">
        @show
    </head>
    <body>
    <header>
            <nav>
                <div class="sinistra"><a href="{{ route('home') }}">Vaine </a></div>
                <div class="links">
                @section('benvenuto') @show
                <a href="{{ route('reservations') }}">Le tue prenotazioni</a>
                <a href= "{{ route('logout') }}">Logout</a>
                </div>
                </nav>
        </header>
        @yield('content')
        <footer>
        <span class="sinistra"><a href="{{ route('home') }}">Vaine </a></span>
                <div class="links">
                @section('footer') @show
                <a href="{{ route('reservations') }}">Le tue prenotazioni</a>
                <a href="{{ route('logout') }}">Logout</a>
            </div>
        </footer>
    </body>
</html>


