<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'PT Semesta Pusat Kreasi')</title>

    <!-- Fonts & Icons -->
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- CSS Libraries -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1e40af',
                        secondary: '#f59e0b',
                    }
                }
            }
        }
    </script>

    <style>
        /* Animations */
        @keyframes fade-in {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .animate-fade-in {
            animation: fade-in 0.5s ease-out forwards;
        }
        
        /* Smooth transitions */
        .transition-smooth {
            transition: all 0.3s ease-in-out;
        }
        
        /* Mobile menu fix */
        @media (max-width: 767px) {
            #mobile-menu {
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.3s ease-out;
            }
            
            #mobile-menu.open {
                max-height: 500px;
            }
        }
        header {
            z-index: 1000;
        }

        .sidebar {
            z-index: 100;
        }
    </style>
</head>

<body class="bg-gradient-to-r from-white to-blue-100 min-h-screen flex flex-col">
    <!-- Header/Navbar -->
    <header class="fixed top-0 left-0 right-0 z-50 bg-gradient-to-r from-white to-blue-400 shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="/">
                        <img src="{{ asset('images/logo_semesta.png') }}" alt="Logo" class="h-10">
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex space-x-8">
                    <a href="{{ route('beranda') }}" 
                    class="text-gray-800 hover:text-secondary px-3 py-2 transition-smooth font-medium {{ request()->routeIs('beranda') ? 'text-secondary font-semibold' : '' }}">
                    BERANDA
                    </a>
                    <a href="{{ route('tentangkami') }}" 
                    class="text-gray-800 hover:text-secondary px-3 py-2 transition-smooth font-medium {{ request()->routeIs('tentangkami') ? 'text-secondary font-semibold' : '' }}">
                    TENTANG KAMI
                    </a>
                    <a href="{{ route('portofolio.index') }}" 
                    class="text-gray-800 hover:text-secondary px-3 py-2 transition-smooth font-medium {{ request()->routeIs('portofolio*') ? 'text-secondary font-semibold' : '' }}">
                    PORTOFOLIO
                    </a>
                    <a href="/berita" 
                    class="text-gray-800 hover:text-secondary px-3 py-2 transition-smooth font-medium {{ request()->is('berita*') ? 'text-secondary font-semibold' : '' }}">
                    BERITA
                    </a>
                    <a href="/hubungikami" 
                    class="text-gray-800 hover:text-secondary px-3 py-2 transition-smooth font-medium {{ request()->is('hubungikami*') ? 'text-secondary font-semibold' : '' }}">
                    HUBUNGI KAMI
                    </a>
                </nav>


                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-gray-800 hover:text-secondary focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="md:hidden bg-white shadow-lg">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="/beranda" class="block px-3 py-2 text-gray-800 hover:text-secondary transition-smooth font-medium">BERANDA</a>
                <a href="/tentangkami" class="block px-3 py-2 text-gray-800 hover:text-secondary transition-smooth font-medium">TENTANG KAMI</a>
                <a href="/portofolio" class="block px-3 py-2 text-gray-800 hover:text-secondary transition-smooth font-medium">PORTOFOLIO</a>
                <a href="/berita" class="block px-3 py-2 text-gray-800 hover:text-secondary transition-smooth font-medium">BERITA</a>
                <a href="/hubungikami" class="block px-3 py-2 text-gray-800 hover:text-secondary transition-smooth font-medium">HUBUNGI KAMI</a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow pt-20">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Company Info -->
                <div class="space-y-4">
                    <h3 class="text-xl font-bold">PT Semesta Pusat Kreasi</h3>
                    <p class="text-gray-300">Menyediakan solusi infrastruktur telekomunikasi terbaik di Indonesia dengan inovasi tanpa henti.</p>
                </div>
                
                <!-- Contact Info -->
                <div class="space-y-4">
                    <h3 class="text-xl font-bold">Hubungi Kami</h3>
                    <div class="space-y-2 text-gray-300">
                        <p><i class="fas fa-map-marker-alt mr-2"></i> Jl. Contoh No. 123, Jakarta</p>
                        <p><i class="fas fa-phone mr-2"></i> (021) 123-4567</p>
                        <p><i class="fas fa-envelope mr-2"></i> info@semestapusatkreasi.com</p>
                    </div>
                </div>
                
                <!-- Social Media -->
                <div class="space-y-4">
                    <h3 class="text-xl font-bold">Ikuti Kami</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-white transition-smooth"><i class="fab fa-facebook-f text-xl"></i></a>
                        <a href="#" class="text-gray-300 hover:text-white transition-smooth"><i class="fab fa-twitter text-xl"></i></a>
                        <a href="#" class="text-gray-300 hover:text-white transition-smooth"><i class="fab fa-instagram text-xl"></i></a>
                        <a href="#" class="text-gray-300 hover:text-white transition-smooth"><i class="fab fa-linkedin-in text-xl"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Copyright -->
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} PT Semesta Pusat Kreasi. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });

        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('open');
        });

        // Close mobile menu when clicking a link
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', () => {
                document.getElementById('mobile-menu').classList.remove('open');
            });
        });

        // Active link highlighting
        const currentPath = window.location.pathname;
        document.querySelectorAll('nav a').forEach(link => {
            if (link.getAttribute('href') === currentPath) {
                link.classList.add('text-secondary', 'font-semibold');
            }
        });
    </script>
    
    @yield('scripts')
</body>
</html>