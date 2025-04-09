@extends('layouts.user')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <!-- Header Section dengan Filter -->
    <div class="text-center mb-8">
        <h1 class="text-4xl font-bold text-gray-900 mb-4">Portofolio Proyek Kami</h1>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto mb-6">
            Karya terbaik yang telah kami selesaikan dengan penuh dedikasi dan profesionalisme
        </p>
        
        <!-- Search and Filter -->
        <div class="flex flex-col md:flex-row justify-center items-center gap-4 mb-8">
            <form method="GET" action="{{ route('portofolio.index') }}" class="w-full md:w-1/3">
                @csrf
                <div class="relative">
                    <input 
                        type="text" 
                        name="search" 
                        placeholder="Cari proyek..." 
                        value="{{ request('search') }}"
                        class="w-full pl-10 pr-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    >
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                </div>
            </form>

            <div class="flex gap-2">
                <form method="GET" action="{{ route('portofolio.index') }}" class="flex items-center">
                    @csrf
                    <select 
                        name="sort_by" 
                        onchange="this.form.submit()"
                        class="border rounded px-3 py-2 text-sm focus:ring-blue-500 focus:border-blue-500"
                        >
                            <option value="created_at_desc" {{ request('sort_by') == 'created_at_desc' ? 'selected' : '' }}>Sortir Terbaru</option>
                            <option value="created_at_asc" {{ request('sort_by') == 'created_at_asc' ? 'selected' : '' }}>Sortir Terlama</option>
                            <option value="nama_proyek_asc" {{ request('sort_by') == 'nama_proyek_asc' ? 'selected' : '' }}>Nama Proyek (A-Z)</option>
                            <option value="nama_proyek_desc" {{ request('sort_by') == 'nama_proyek_desc' ? 'selected' : '' }}>Nama Proyek (Z-A)</option>
                            <option value="duration_asc" {{ request('sort_by') == 'duration_asc' ? 'selected' : '' }}>Durasi (Pendek-Panjang)</option>
                            <option value="duration_desc" {{ request('sort_by') == 'duration_desc' ? 'selected' : '' }}>Durasi (Panjang-Pendek)</option>
                        </select>
                    <input type="hidden" name="sort_order" value="{{ request('sort_order', 'desc') }}">
                </form>

                <form method="GET" action="{{ route('portofolio.index') }}" class="flex items-center">
                    @csrf
                    <select 
                        name="per_page" 
                        onchange="this.form.submit()"
                        class="border rounded px-3 py-2 text-sm focus:ring-blue-500 focus:border-blue-500"
                    >
                        <option value="6" {{ request('per_page', 6) == 6 ? 'selected' : '' }}>6 per halaman</option>
                        <option value="12" {{ request('per_page', 6) == 12 ? 'selected' : '' }}>12 per halaman</option>
                        <option value="24" {{ request('per_page', 6) == 24 ? 'selected' : '' }}>24 per halaman</option>
                    </select>
                </form>
            </div>
        </div>
        
        <div class="w-20 h-1 bg-blue-500 mx-auto rounded-full"></div>
    </div>

    <!-- Projects Grid -->
    @if($proyeks->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            @foreach($proyeks as $proyek)
            <div class="group bg-white rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                <!-- Project Image -->
                <div class="relative h-64 overflow-hidden">
                    @if($proyek->documentation)
                        <img src="{{ asset('storage/' . $proyek->documentation) }}" alt="{{ $proyek->nama_proyek }}" 
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    @else
                        <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                            <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    @endif
                    
                    <div class="absolute top-4 right-4 bg-blue-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow-md">
                        {{ $proyek->duration }} Bulan
                    </div>
                </div>

                <!-- Project Details -->
                <div class="p-6">
                    <div class="flex items-start justify-between mb-3">
                        <h3 class="text-xl font-bold text-gray-900 truncate">{{ $proyek->nama_proyek }}</h3>
                        <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full whitespace-nowrap">
                            {{ $proyek->status ?? 'Selesai' }}
                        </span>
                    </div>
                    
                    <div class="flex items-center text-gray-600 mb-3">
                        <svg class="w-5 h-5 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span class="text-sm truncate">{{ $proyek->location }}</span>
                    </div>
                    
                    <p class="text-gray-600 mb-4 line-clamp-2">{{ $proyek->description }}</p>
                    
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                            <span class="text-sm font-medium">{{ $proyek->manpower }} Team</span>
                        </div>
                        
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    @else
        <div class="bg-white rounded-xl shadow-sm p-8 text-center">
            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <h3 class="mt-2 text-lg font-medium text-gray-900">Tidak ada proyek ditemukan</h3>
            <p class="mt-1 text-gray-500">
                @if(request('search'))
                    Coba dengan kata kunci lain atau <a href="{{ route('portofolio.index') }}" class="text-blue-600 hover:text-blue-800">reset pencarian</a>
                @else
                    Belum ada proyek yang tersedia
                @endif
            </p>
            @can('create', App\Models\Proyek::class)
                <div class="mt-6">
                    <a href="{{ route('proyek.create') }}" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <svg class="-ml-1 mr-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Tambah Proyek Baru
                    </a>
                </div>
            @endcan
        </div>
    @endif

    <!-- Pagination -->
    @if($proyeks->hasPages())
        <div class="flex justify-center mt-8">
            <div class="flex items-center space-x-1">
                {{ $proyeks->appends(request()->query())->links('vendor.pagination.tailwind') }}
            </div>
        </div>
    @endif
</div>
@endsection