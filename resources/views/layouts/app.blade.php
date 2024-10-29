<!DOCTYPE html>
<html lang="pt-BR">

<head>
    @include('partials.head')
</head>

<body>
    <header>
        @include('partials.nav')
    </header>
    <main>
        @yield('content')
    </main>

    <footer>
        @include('partials.footer')
    </footer>
    @vite('resources/js/app.js')
</body>

</html>