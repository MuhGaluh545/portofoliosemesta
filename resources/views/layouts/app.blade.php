<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script src="//unpkg.com/alpinejs" defer></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>
<body class="bg-gradient-to-r from-white to-blue-400 shadow-md">
    <div id="app">
        <!-- Header / Navbar -->
        <header class="fixed top-0 left-0 right-0 z-50 w-full bg-gradient-to-r from-white to-blue-400 shadow-md">
            <div class="max-w-7xl mx-auto px-6 py-3 flex justify-between items-center">
                <!-- Logo -->
                <div class="flex items-center space-x-2">
                    <img src="{{ asset('images/logo_semesta.png') }}" alt="Logo" class="h-10 w-30">
                </div>

                <!-- Tombol Menu untuk Mobile -->
                <button id="menu-btn" class="md:hidden text-2xl">☰</button>
                
                <!-- Menu Navbar -->
                <nav id="menu" class="hidden md:flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-6 absolute md:relative top-14 md:top-0 left-0 md:left-auto w-full md:w-auto bg-white md:bg-transparent p-4 md:p-0 shadow-lg md:shadow-none font-semibold">
                <a href="/portofolio/admin" class="px-6 py-3 text-black hover:text-amber-500 transition-colors duration-300">DASHBOARD</a>
                    <!-- Menu Proyek (Hanya Tampil Saat Login) -->
                    @if(Auth::check())
                        <a href="/portofolio/proyek" class="px-6 py-3 text-amber-500 hover:text-amber-500 transition-colors duration-300">PROYEK</a>
                    @endif
                </nav>

                <!-- Tombol Login/Logout -->
                <div>
                    @if(Auth::check())
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary text-white bg-blue-600 py-2 px-6 rounded-lg font-medium hover:bg-blue-50 transition-colors duration-300">Logout</button>
                    </form>
                    @else
                    <a href="{{ route('login') }}" class="btn btn-primary text-white bg-blue-600 py-2 px-6 rounded-lg font-medium hover:bg-blue-50 transition-colors duration-300">Login</a>
                    @endif
                </div>
            </div>
        </header>

        <!-- Konten Utama -->
        <main class="pt-20 px-4 sm:px-6 lg:px-8">
            @yield('content')
        </main>
    </div>

    <!-- Script untuk Toggle Menu Mobile -->
    <script>
        document.getElementById('menu-btn').addEventListener('click', function() {
            const menu = document.getElementById('menu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>