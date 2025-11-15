<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Philippines Photo Album</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
       <header>
    <h1>Philippines Photo Album</h1>

    @if(!request()->routeIs('home') && isset($categories))
        <nav class="header-nav">
            @foreach($categories as $slug => $name)
                <a class="category-card" href="{{ route('category', $slug) }}">{{ $name }}</a>
            @endforeach
        </nav>
    @endif
</header>


    <!-- Main content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; {{ date('Y') }} Philippines Photo Album</p>
    </footer>
</body>
</html>
