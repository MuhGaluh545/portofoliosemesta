@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold text-center mb-8 text-gray-800">Tambah Proyek Baru</h1>

        <form action="{{ route('proyek.store') }}" method="POST" enctype="multipart/form-data" class="bg-white shadow-lg rounded-lg p-8 max-w-2xl mx-auto">
            @csrf
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2">Nama Proyek:</label>
                <input type="text" name="nama_proyek" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2">Lokasi:</label>
                <input type="text" name="location" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2">Man Power:</label>
                <input type="number" name="manpower" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2">Durasi (bulan):</label>
                <input type="number" name="duration" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2">Deskripsi:</label>
                <textarea name="description" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" rows="4"></textarea>
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2">Dokumentasi:</label>
                <input type="file" name="documentation"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
            </div>

            <div class="flex justify-between">
                <a href="{{ route('proyek.index') }}" class="bg-gray-600 text-white px-6 py-2 rounded-lg hover:bg-gray-700 transition duration-300">
                    Kembali
                </a>
                <button type="submit"
                    class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                    Simpan
                </button>
            </div>
        </form>
    </div>
@endsection