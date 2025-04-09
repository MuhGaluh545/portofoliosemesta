<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Admin - PT Semesta Pusat Kreasi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <header class="fixed top-0 left-0 right-0 z-50 w-full bg-gradient-to-r from-white to-blue-400 shadow-md">
        <div class="max-w-7xl mx-auto px-6 py-3 flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center space-x-2">
                <img src="{{ asset('images/logo_semesta.png') }}" alt="Logo" class="h-10 w-30">
            </div>

            <!-- Mobile Menu Button -->
            <button id="menu-btn" class="md:hidden text-2xl">☰</button>

            <!-- Navigation Menu -->
            <nav id="menu" class="hidden md:flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-6 absolute md:relative top-14 md:top-0 left-0 md:left-auto w-full md:w-auto bg-white md:bg-transparent p-4 md:p-0 shadow-lg md:shadow-none font-semibold">
                @if(Auth::check())
                    <a href="/portofolio/admin" class="px-6 py-3 text-amber-500 hover:text-amber-500 transition-colors duration-300">DASHBOARD</a>
                    <a href="/portofolio/proyek" class="px-6 py-3 text-black hover:text-amber-500 transition-colors duration-300">PROYEK</a>
                @endif
            </nav>
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

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto pt-20 px-4">
        <h2 class="text-3xl font-bold text-gray-800 text-center mb-6">Daftar Proyek</h2>
        
        <!-- Search and Filter Section -->
        <div class="flex flex-col md:flex-row justify-between items-center gap-4 mb-8">
            <!-- Search Form -->
            <form method="GET" action="{{ route('portofolio.admin') }}" class="w-full md:w-1/3">
                <div class="relative">
                    <input 
                        type="text" 
                        name="search" 
                        placeholder="Cari proyek..." 
                        value="{{ request('search') }}"
                        class="w-full pl-10 pr-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    >
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-search text-gray-400"></i>
                    </div>
                </div>
            </form>

            <!-- Filter and Sort Controls -->
            <div class="flex flex-col md:flex-row gap-4 w-full md:w-auto">
                <!-- Location Filter -->
                <form method="GET" action="{{ route('portofolio.admin') }}" class="flex items-center">
                <select name="location" onchange="this.form.submit()" class="border rounded px-3 py-2">
                    <option value="">Semua Lokasi</option>
                    @foreach($locations as $location)
                        <option value="{{ $location }}" {{ request('location') == $location ? 'selected' : '' }}>
                            {{ $location }}
                        </option>
                    @endforeach
                </select>
                </form>

                <!-- Duration Range Filter -->
                <form method="GET" action="{{ route('portofolio.admin') }}" class="flex items-center">
                    <select 
                        name="duration_range" 
                        onchange="this.form.submit()"
                        class="border rounded px-3 py-2 text-sm focus:ring-blue-500 focus:border-blue-500"
                    >
                        <option value="">Semua Durasi</option>
                        <option value="0-3" {{ request('duration_range') == '0-3' ? 'selected' : '' }}>0-3 Bulan</option>
                        <option value="4-6" {{ request('duration_range') == '4-6' ? 'selected' : '' }}>4-6 Bulan</option>
                        <option value="7-12" {{ request('duration_range') == '7-12' ? 'selected' : '' }}>7-12 Bulan</option>
                        <option value="12+" {{ request('duration_range') == '12+' ? 'selected' : '' }}>12+ Bulan</option>
                    </select>
                </form>

                <!-- Sort Options -->
                <form method="GET" action="{{ route('portofolio.admin') }}" class="flex items-center">
                    <select 
                        name="sort_by" 
                        onchange="this.form.submit()"
                        class="border rounded px-3 py-2 text-sm focus:ring-blue-500 focus:border-blue-500"
                    >
                        <option value="created_at_desc" {{ request('sort_by') == 'created_at_desc' ? 'selected' : '' }}>Terbaru</option>
                        <option value="created_at_asc" {{ request('sort_by') == 'created_at_asc' ? 'selected' : '' }}>Terlama</option>
                        <option value="nama_proyek_asc" {{ request('sort_by') == 'nama_proyek_asc' ? 'selected' : '' }}>A-Z</option>
                        <option value="nama_proyek_desc" {{ request('sort_by') == 'nama_proyek_desc' ? 'selected' : '' }}>Z-A</option>
                        <option value="duration_asc" {{ request('sort_by') == 'duration_asc' ? 'selected' : '' }}>Durasi ↑</option>
                        <option value="duration_desc" {{ request('sort_by') == 'duration_desc' ? 'selected' : '' }}>Durasi ↓</option>
                    </select>
                </form>

                <!-- Items Per Page -->
                <form method="GET" action="{{ route('portofolio.admin') }}" class="flex items-center">
                    <select 
                        name="per_page" 
                        onchange="this.form.submit()"
                        class="border rounded px-3 py-2 text-sm focus:ring-blue-500 focus:border-blue-500"
                    >
                        <option value="6" {{ request('per_page', 6) == 6 ? 'selected' : '' }}>6/halaman</option>
                        <option value="12" {{ request('per_page', 6) == 12 ? 'selected' : '' }}>12/halaman</option>
                        <option value="24" {{ request('per_page', 6) == 24 ? 'selected' : '' }}>24/halaman</option>
                    </select>
                </form>
            </div>
        </div>

        <!-- Project Count -->
        <div class="mb-4 text-sm text-gray-600">
            Menampilkan {{ $proyeks->firstItem() }} - {{ $proyeks->lastItem() }} dari {{ $proyeks->total() }} proyek
            @if(request()->has('search') || request()->has('location') || request()->has('duration_range'))
                <a href="{{ route('portofolio.index') }}" class="ml-2 text-blue-600 hover:underline">
                    <i class="fas fa-times"></i> Reset filter
                </a>
            @endif
        </div>

        <!-- Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($proyeks as $p)
                <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <!-- Project Image -->
                    <div class="h-56 overflow-hidden">
                        @if($p->documentation)
                            <img src="{{ asset('storage/' . $p->documentation) }}" alt="{{ $p->nama_proyek }}" class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                                <i class="fas fa-image text-gray-400 text-4xl"></i>
                            </div>
                        @endif
                    </div>

                    <!-- Project Details -->
                    <div class="p-4">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $p->nama_proyek }}</h3>
                        
                        <div class="flex items-center text-gray-600 text-sm mb-1">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            <span>{{ $p->location }}</span>
                        </div>
                        
                        <div class="flex items-center text-gray-600 text-sm mb-1">
                            <i class="fas fa-users mr-2"></i>
                            <span>{{ $p->manpower }} Orang</span>
                        </div>
                        
                        <div class="flex items-center text-gray-600 text-sm mb-3">
                            <i class="fas fa-clock mr-2"></i>
                            <span>{{ $p->duration }} Bulan</span>
                        </div>
                        
                        <p class="text-gray-700 text-sm line-clamp-3">{{ $p->description }}</p>
                        
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center py-10">
                    <div class="text-gray-500 mb-4">
                        <i class="fas fa-inbox text-4xl"></i>
                    </div>
                    <p class="text-gray-500">Tidak ada proyek yang ditemukan</p>
                    @if(request()->has('search') || request()->has('location') || request()->has('duration_range'))
                        <a href="{{ route('portofolio.index') }}" class="mt-2 inline-block text-blue-600 hover:underline">
                            <i class="fas fa-redo"></i> Coba dengan filter berbeda
                        </a>
                    @endif
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="mt-8 flex flex-col sm:flex-row items-center justify-between">
            <div class="mb-4 sm:mb-0">
                <p class="text-sm text-gray-700">
                    Menampilkan <span class="font-medium">{{ $proyeks->firstItem() }}</span> 
                    sampai <span class="font-medium">{{ $proyeks->lastItem() }}</span> 
                    dari <span class="font-medium">{{ $proyeks->total() }}</span> hasil
                </p>
            </div>
            
            <div class="flex items-center space-x-1">
                <!-- Previous Page Link -->
                @if($proyeks->onFirstPage())
                    <span class="px-3 py-1 border rounded text-gray-400 cursor-not-allowed">
                        <i class="fas fa-chevron-left"></i>
                    </span>
                @else
                    <a href="{{ $proyeks->previousPageUrl() }}" class="px-3 py-1 border rounded bg-white text-blue-600 hover:bg-gray-100">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                @endif
                
                <!-- Page Numbers -->
                @foreach($proyeks->getUrlRange(1, $proyeks->lastPage()) as $page => $url)
                    @if($page == $proyeks->currentPage())
                        <span class="px-3 py-1 border rounded bg-blue-600 text-white">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}" class="px-3 py-1 border rounded bg-white text-blue-600 hover:bg-gray-100">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach
                
                <!-- Next Page Link -->
                @if($proyeks->hasMorePages())
                    <a href="{{ $proyeks->nextPageUrl() }}" class="px-3 py-1 border rounded bg-white text-blue-600 hover:bg-gray-100">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                @else
                    <span class="px-3 py-1 border rounded text-gray-400 cursor-not-allowed">
                        <i class="fas fa-chevron-right"></i>
                    </span>
                @endif
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="mt-10 bg-gray-800 text-white text-center py-4">
        <p>&copy; <script>document.write(new Date().getFullYear());</script> PT Semesta Pusat Kreasi.</p>
    </footer>

    <!-- JavaScript for Mobile Menu Toggle -->
    <script>
        document.getElementById('menu-btn').addEventListener('click', function() {
            const menu = document.getElementById('menu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>