@extends('layouts.app')

@section('content')
<div class="container mx-auto p-8">
    <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">Daftar Proyek</h2>

    <!-- Tombol Tambah Proyek dan Form Pencarian -->
    <div class="flex justify-between items-center mb-6">
        <a href="{{ route('proyek.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
            ➕ Tambah Proyek
        </a>
        <!-- Form Pencarian -->
        <form action="{{ route('proyek.index') }}" method="GET" class="flex items-center">
            <input type="text" name="search" placeholder="Cari proyek..." value="{{ request('search') }}"
                class="px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
            <button type="submit" class="ml-2 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                🔍 Cari
            </button>
        </form>
    </div>

    <!-- Tabel Proyek -->
    <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
        <table class="w-full table-auto">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="py-4 px-6">Nama Proyek</th>
                    <th class="py-4 px-6">Lokasi</th>
                    <th class="py-4 px-6">Man Power</th>
                    <th class="py-4 px-6">Durasi(bulan)</th>
                    <th class="py-4 px-6">Deskripsi</th>
                    <th class="py-4 px-6">Dokumentasi</th>
                    <th class="py-4 px-6">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @forelse($proyeks as $p)
                    <tr class="border-b hover:bg-gray-100 transition">
                        <td class="py-4 px-6">{{ $p->nama_proyek }}</td>
                        <td class="py-4 px-6">{{ $p->location }}</td>
                        <td class="py-4 px-6">{{ $p->manpower }}</td>
                        <td class="py-4 px-6">{{ $p->duration }}</td>
                        <td class="py-4 px-6">{{ $p->description }}</td>
                        <td class="py-4 px-6">
                            @if ($p->documentation)
                                <a href="{{ asset('storage/' . $p->documentation) }}" class="text-blue-600 hover:underline" target="_blank">📄 Lihat File</a>
                            @else
                                <span class="text-gray-400">Tidak ada file</span>
                            @endif
                        </td>
                        <td class="py-4 px-6 space-x-4">
                            <a href="{{ route('proyek.edit', $p->id) }}" class="text-yellow-500 hover:underline">✏️ Edit</a>
                            <form action="{{ route('proyek.destroy', $p->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline" onclick="return confirm('Yakin ingin menghapus?')">🗑️ Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="py-4 px-6 text-center text-gray-500">Tidak ada data proyek.</td>
                    </tr>
            @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-6">
        {{ $proyeks->links() }}
    </div>
</div>
@endsection