@extends('layouts.app')

@section('content')
<div class="container mx-auto p-8">
    <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">Edit Proyek</h2>

    <form action="{{ route('proyek.update', $proyek->id) }}" method="POST" enctype="multipart/form-data" class="bg-white shadow-lg rounded-lg p-8 max-w-2xl mx-auto">
        @csrf
        @method('PUT')
        <div class="mb-6">
            <label for="nama_proyek" class="block text-gray-700 text-sm font-bold mb-2">Nama Proyek:</label>
            <input type="text" name="nama_proyek" id="nama_proyek" value="{{ $proyek->nama_proyek }}"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" required>
        </div>

        <div class="mb-6">
            <label for="location" class="block text-gray-700 text-sm font-bold mb-2">Lokasi:</label>
            <input type="text" name="location" id="location" value="{{ $proyek->location }}"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
        </div>

        <div class="mb-6">
            <label for="manpower" class="block text-gray-700 text-sm font-bold mb-2">Man Power:</label>
            <input type="number" name="manpower" id="manpower" value="{{ $proyek->manpower }}"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" required>
        </div>

        <div class="mb-6">
            <label for="duration" class="block text-gray-700 text-sm font-bold mb-2">Durasi (bulan):</label>
            <input type="number" name="duration" id="duration" value="{{ $proyek->duration }}"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
        </div>

        <div class="mb-6">
            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Deskripsi:</label>
            <textarea name="description" id="description" rows="4"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">{{ $proyek->description }}</textarea>
        </div>

        <div class="mb-6">
            <label for="documentation" class="block text-gray-700 text-sm font-bold mb-2">Dokumentasi:</label>
            <input type="file" name="documentation" id="documentation"
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
            @if ($proyek->documentation)
                <p class="mt-2 text-sm text-gray-600">File saat ini: <a href="{{ asset('storage/' . $proyek->documentation) }}" target="_blank" class="text-blue-600 hover:underline">Lihat File</a></p>
            @endif
        </div>

        <div class="flex justify-between">
            <a href="{{ route('proyek.index') }}" class="bg-gray-600 text-white px-6 py-2 rounded-lg hover:bg-gray-700 transition duration-300">
                Kembali
            </a>
            <button type="submit"
                class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>
@endsection