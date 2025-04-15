@extends('layouts.user')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white pt-0 pb-20 -mt-4">
    <div class="container mx-auto px-6 text-center pt-8 md:pt-12">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">Membangun Koneksi, Menciptakan Masa Depan</h1>
        <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">Kami adalah mitra terpercaya dalam solusi infrastruktur telekomunikasi di Indonesia</p>
        <a href="#visi" class="inline-block bg-amber-500 hover:bg-amber-600 text-white font-bold py-3 px-8 rounded-full transition duration-300 transform hover:scale-105">
            Jelajahi Tentang Kami
        </a>
    </div>
</section>

<div class="flex flex-col md:flex-row">
    <!-- Sidebar Menu -->
    <div id="about-sidebar" class="sidebar-about w-full md:w-1/4 lg:w-1/5 bg-white shadow-md p-4 sticky top-0 h-screen overflow-y-auto">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">TENTANG KAMI</h2>
        <nav class="space-y-2">
            <a href="#visi" class="block py-2 px-4 rounded hover:bg-blue-50 text-gray-700 transition-colors duration-200 sidebar-link">Visi</a>
            <a href="#misi" class="block py-2 px-4 rounded hover:bg-blue-50 text-gray-700 transition-colors duration-200 sidebar-link">Misi</a>
            <a href="#tim" class="block py-2 px-4 rounded hover:bg-blue-50 text-gray-700 transition-colors duration-200 sidebar-link">Tim Kami</a>
            <a href="#keunggulan" class="block py-2 px-4 rounded hover:bg-blue-50 text-gray-700 transition-colors duration-200 sidebar-link">Keunggulan Kami</a>
            <a href="#cara-kerja" class="block py-2 px-4 rounded hover:bg-blue-50 text-gray-700 transition-colors duration-200 sidebar-link">Cara Kerja</a>
            <a href="#pencapaian" class="block py-2 px-4 rounded hover:bg-blue-50 text-gray-700 transition-colors duration-200 sidebar-link">Pencapaian</a>
            <a href="#testimoni" class="block py-2 px-4 rounded hover:bg-blue-50 text-gray-700 transition-colors duration-200 sidebar-link">Testimoni</a>
        </nav>
    </div>

    <!-- Konten Utama -->
    <div class="w-full md:w-3/4 lg:w-4/5 p-6" id="about-page">
        <!-- Visi -->
        <section id="visi" class="py-12" data-aos="fade-up">
            <h2 class="text-3xl font-bold mb-6 text-gray-800">Visi</h2>
            <p class="text-lg text-gray-700">Menjadi penyedia infrastruktur telekomunikasi terbaik dan terpercaya di Indonesia dengan inovasi tanpa henti dan komitmen terhadap kualitas.</p>
            <div class="mt-8 bg-gradient-to-r from-blue-50 to-white p-8 rounded-xl">
                <p class="text-xl italic text-blue-800">"Mewujudkan konektivitas tanpa batas untuk masa depan Indonesia yang lebih digital"</p>
            </div>
        </section>

        <!-- Misi -->
        <section id="misi" class="py-12" data-aos="fade-up">
            <h2 class="text-3xl font-bold mb-6 text-gray-800">Misi</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow border-l-4 border-blue-500">
                    <div class="text-blue-500 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Kualitas Terbaik</h3>
                    <p class="text-gray-600">Menyediakan produk dan layanan dengan standar kualitas tertinggi untuk kepuasan pelanggan.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow border-l-4 border-amber-500">
                    <div class="text-amber-500 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Inovasi Teknologi</h3>
                    <p class="text-gray-600">Terus mengembangkan solusi berbasis teknologi terkini untuk memenuhi kebutuhan pasar.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow border-l-4 border-green-500">
                    <div class="text-green-500 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Kolaborasi</h3>
                    <p class="text-gray-600">Membangun kemitraan strategis untuk menciptakan nilai tambah bagi semua pemangku kepentingan.</p>
                </div>
            </div>
        </section>

        <!-- Tim Kami -->
        <section id="tim" class="py-12">
            <div class="bg-gradient-to-b from-blue-50 to-white rounded-lg py-16">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-16" data-aos="fade-up">
                        <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Tim Profesional Kami</h2>
                        <p class="text-lg text-gray-600 max-w-2xl mx-auto">Bertemu dengan para ahli yang akan mewujudkan proyek Anda</p>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                        <!-- Team Member 1 -->
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-3 transition-all duration-300 group" data-aos="fade-up" data-aos-delay="100">
                            <div class="relative overflow-hidden h-64">
                                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&h=400&q=80" 
                                    alt="John Doe" 
                                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                                    <div class="text-white">
                                        <p class="text-sm">"Kualitas adalah prioritas utama dalam setiap proyek."</p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6 text-center">
                                <h3 class="text-xl font-bold text-gray-800">John Doe</h3>
                                <p class="text-amber-600 font-medium mt-1">CEO & Founder</p>
                                <div class="flex justify-center space-x-3 mt-4">
                                    <a href="#" class="text-gray-400 hover:text-blue-500 transition-colors">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                    <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                                        </svg>
                                    </a>
                                    <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Team Member 2 -->
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-3 transition-all duration-300 group" data-aos="fade-up" data-aos-delay="200">
                            <div class="relative overflow-hidden h-64">
                                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&h=400&q=80" 
                                    alt="Jane Smith" 
                                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                                    <div class="text-white">
                                        <p class="text-sm">"Teknologi terbaru untuk solusi yang lebih baik."</p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6 text-center">
                                <h3 class="text-xl font-bold text-gray-800">Jane Smith</h3>
                                <p class="text-amber-600 font-medium mt-1">CTO</p>
                                <div class="flex justify-center space-x-3 mt-4">
                                    <a href="#" class="text-gray-400 hover:text-blue-500 transition-colors">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                    <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                                        </svg>
                                    </a>
                                    <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Team Member 3 -->
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-3 transition-all duration-300 group" data-aos="fade-up" data-aos-delay="300">
                            <div class="relative overflow-hidden h-64">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&h=400&q=80" 
                                    alt="Michael Johnson" 
                                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                                    <div class="text-white">
                                        <p class="text-sm">"Desain yang baik adalah desain yang berfungsi dengan sempurna."</p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6 text-center">
                                <h3 class="text-xl font-bold text-gray-800">Michael Johnson</h3>
                                <p class="text-amber-600 font-medium mt-1">Lead Designer</p>
                                <div class="flex justify-center space-x-3 mt-4">
                                    <a href="#" class="text-gray-400 hover:text-blue-500 transition-colors">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                    <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                                        </svg>
                                    </a>
                                    <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- CTA Section -->
                    <div class="mt-20 text-center" data-aos="fade-up">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6">Ingin bergabung dengan tim kami?</h3>
                        <a href="#" class="inline-flex items-center px-8 py-3 border border-transparent text-lg font-medium rounded-md shadow-sm text-white bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 transition-all duration-300">
                            Lihat Lowongan Kerja
                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Keunggulan Kami -->
        <section id="keunggulan" class="py-12">
            <div class="bg-gradient-to-b from-blue-50 to-white py-16 mt-4 mb-4 rounded-lg">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-16" data-aos="fade-up">
                        <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Keunggulan Kami</h2>
                        <p class="text-lg text-gray-600 max-w-3xl mx-auto">Alasan mengapa klien mempercayai layanan kami</p>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                        <!-- Keunggulan 1 -->
                        <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-amber-500" data-aos="fade-up" data-aos-delay="100">
                            <div class="bg-gradient-to-br from-blue-100 to-blue-50 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mt-6 text-center">Kualitas Terbaik</h3>
                            <p class="text-gray-600 mt-4 text-center">Kami menggunakan bahan berkualitas tinggi dan proses ketat untuk hasil yang sempurna.</p>
                        </div>
                        
                        <!-- Keunggulan 2 -->
                        <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-amber-500" data-aos="fade-up" data-aos-delay="200">
                            <div class="bg-gradient-to-br from-blue-100 to-blue-50 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mt-6 text-center">Cepat & Tepat</h3>
                            <p class="text-gray-600 mt-4 text-center">Proses efisien dengan timeline jelas tanpa mengorbankan kualitas pekerjaan.</p>
                        </div>
                        
                        <!-- Keunggulan 3 -->
                        <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-amber-500" data-aos="fade-up" data-aos-delay="300">
                            <div class="bg-gradient-to-br from-blue-100 to-blue-50 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mt-6 text-center">Inovatif</h3>
                            <p class="text-gray-600 mt-4 text-center">Solusi kreatif dengan pendekatan terkini untuk kebutuhan spesifik Anda.</p>
                        </div>
                        
                        <!-- Keunggulan 4 -->
                        <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-amber-500" data-aos="fade-up" data-aos-delay="400">
                            <div class="bg-gradient-to-br from-blue-100 to-blue-50 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mt-6 text-center">Tim Profesional</h3>
                            <p class="text-gray-600 mt-4 text-center">Dikerjakan oleh ahli berpengalaman dengan standar profesional tinggi.</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>


        <!-- Cara Kerja -->
        <section id="cara-kerja" class="py-12">
            <div class="bg-gradient-to-b from-gray-50 to-white py-16 mb-4 rounded-lg">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-16" data-aos="fade-up">
                        <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Cara Kerja Kami</h2>
                        <p class="text-lg text-gray-600 max-w-3xl mx-auto">Proses sederhana untuk mewujudkan kebutuhan kreatif Anda</p>
                    </div>
                    
                    <div class="relative">
                        <!-- Garis tengah yang diperbaiki -->
                        <div class="absolute left-1/2 h-full w-1.5 bg-gradient-to-b from-blue-500 to-amber-500 transform -translate-x-1/2 hidden md:block rounded-full"></div>
                        
                        <!-- Step 1 - Diperbaiki struktur dan spacing -->
                        <div class="relative mb-16 md:flex items-center" data-aos="fade-right">
                            <div class="md:w-1/2 md:pr-12 text-right mb-6 md:mb-0">
                                <div class="inline-flex items-center justify-center bg-blue-600 text-white rounded-full w-16 h-16 text-2xl font-bold shadow-lg mx-auto md:mx-0 transition-all duration-300 hover:scale-110">
                                    1
                                </div>
                                <div class="mt-4 bg-white p-4 rounded-lg shadow-sm border border-gray-100 inline-block">
                                    <h3 class="text-xl font-bold text-gray-800">Konsultasi</h3>
                                    <p class="text-gray-600 mt-1">Diskusikan kebutuhan Anda dengan tim kami</p>
                                </div>
                            </div>
                            <div class="md:w-1/2 hidden md:block"></div>
                        </div>
                        
                        <!-- Step 2 - Diperbaiki warna amber dan struktur -->
                        <div class="relative mb-16 md:flex flex-row-reverse items-center" data-aos="fade-left">
                            <div class="md:w-1/2 md:pl-12 mb-6 md:mb-0">
                                <div class="inline-flex items-center justify-center bg-amber-500 text-white rounded-full w-16 h-16 text-2xl font-bold shadow-lg mx-auto md:mx-0 transition-all duration-300 hover:scale-110">
                                    2
                                </div>
                                <div class="mt-4 bg-white p-4 rounded-lg shadow-sm border border-gray-100 inline-block">
                                    <h3 class="text-xl font-bold text-gray-800">Perencanaan</h3>
                                    <p class="text-gray-600 mt-1">Kami buat rencana khusus untuk Anda</p>
                                </div>
                            </div>
                            <div class="md:w-1/2 hidden md:block"></div>
                        </div>
                        
                        <!-- Step 3 -->
                        <div class="relative mb-16 md:flex items-center" data-aos="fade-right">
                            <div class="md:w-1/2 md:pr-12 text-right mb-6 md:mb-0">
                                <div class="inline-flex items-center justify-center bg-blue-600 text-white rounded-full w-16 h-16 text-2xl font-bold shadow-lg mx-auto md:mx-0 transition-all duration-300 hover:scale-110">
                                    3
                                </div>
                                <div class="mt-4 bg-white p-4 rounded-lg shadow-sm border border-gray-100 inline-block">
                                    <h3 class="text-xl font-bold text-gray-800">Eksekusi</h3>
                                    <p class="text-gray-600 mt-1">Tim ahli kami mengerjakan proyek Anda</p>
                                </div>
                            </div>
                            <div class="md:w-1/2 hidden md:block"></div>
                        </div>
                        
                        <!-- Step 4 - Diperbaiki typo pada data-aos dan warna amber -->
                        <div class="relative md:flex flex-row-reverse items-center" data-aos="fade-left">
                            <div class="md:w-1/2 md:pl-12 mb-6 md:mb-0">
                                <div class="inline-flex items-center justify-center bg-amber-500 text-white rounded-full w-16 h-16 text-2xl font-bold shadow-lg mx-auto md:mx-0 transition-all duration-300 hover:scale-110">
                                    4
                                </div>
                                <div class="mt-4 bg-white p-4 rounded-lg shadow-sm border border-gray-100 inline-block">
                                    <h3 class="text-xl font-bold text-gray-800">Selesai</h3>
                                    <p class="text-gray-600 mt-1">Proyek siap digunakan dan diserahkan</p>
                                </div>
                            </div>
                            <div class="md:w-1/2 hidden md:block"></div>
                        </div>
                    </div>
                    
                    <!-- Company Info - Diperbaiki warna background -->
                    <div class="mt-20 text-center bg-white p-8 rounded-xl shadow-md border border-gray-200" data-aos="fade-up">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">PT Semesta Pusat Kreasi</h3>
                        <p class="text-gray-600 mb-4">Menyediakan layanan kreatif dan inovatif untuk kebutuhan bisnis Anda</p>
                        <div class="flex justify-center space-x-4 mt-6">
                            <a href="#" class="text-blue-500 hover:text-blue-700">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                            </a>
                            <a href="#" class="text-blue-600 hover:text-blue-800">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/></svg>
                            </a>
                            <a href="#" class="text-gray-700 hover:text-gray-900">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pencapaian -->
        <section id="pencapaian" class="py-12 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Pencapaian Kami</h2>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto">Beberapa angka yang membuktikan kualitas kerja kami</p>
                </div>
                
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                    <div data-aos="fade-up" data-aos-delay="100">
                        <div class="text-5xl font-bold text-blue-600 mb-2" data-count="250">0</div>
                        <p class="text-gray-600">Proyek Selesai</p>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="200">
                        <div class="text-5xl font-bold text-blue-600 mb-2" data-count="50">0</div>
                        <p class="text-gray-600">Klien Puas</p>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="300">
                        <div class="text-5xl font-bold text-blue-600 mb-2" data-count="15">0</div>
                        <p class="text-gray-600">Penghargaan</p>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="400">
                        <div class="text-5xl font-bold text-blue-600 mb-2" data-count="10">0</div>
                        <p class="text-gray-600">Tahun Pengalaman</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Testimoni -->
        <section id="testimoni" class="py-12">
            <div class="bg-gradient-to-b from-blue-50 to-white mt-4 mb-4 rounded-lg py-16">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-10" data-aos="fade-up">
                        <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Apa Kata Klien Kami?</h2>
                        <p class="text-lg text-gray-600 max-w-2xl mx-auto">Testimoni dari berbagai perusahaan yang telah bekerja sama dengan kami</p>
                    </div>
                    
                    <div class="relative">
                        <!-- Testimonial Slider -->
                        <div id="testimoni-slider" class="overflow-hidden">
                            <div class="flex transition-transform duration-500 ease-in-out">
                                <!-- Testimoni 1 -->
                                <div class="min-w-full px-4">
                                    <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                                        <div class="text-amber-400 mb-4">
                                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                                            </svg>
                                        </div>
                                        <p class="text-gray-600 text-lg italic">"Pelayanan sangat memuaskan, hasilnya melebihi ekspektasi kami. Tim profesional dan komunikatif dalam setiap tahap proyek."</p>
                                        <div class="flex items-center mt-8">
                                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&h=100&q=80" 
                                                alt="Budi Santoso" 
                                                class="w-12 h-12 rounded-full object-cover border-2 border-amber-400">
                                            <div class="ml-4">
                                                <h3 class="font-bold text-gray-800">Budi Santoso</h3>
                                                <p class="text-sm text-gray-600">CEO Perusahaan A</p>
                                                <div class="flex mt-1">
                                                    <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                    </svg>
                                                    <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                    </svg>
                                                    <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                    </svg>
                                                    <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                    </svg>
                                                    <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Testimoni 2 -->
                                <div class="min-w-full px-4">
                                    <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                                        <div class="text-amber-400 mb-4">
                                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                                            </svg>
                                        </div>
                                        <p class="text-gray-600 text-lg italic">"Tim sangat responsif dan solutif. Hasil pekerjaan rapi dan tepat waktu. Sangat direkomendasikan untuk kebutuhan profesional!"</p>
                                        <div class="flex items-center mt-8">
                                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&h=100&q=80" 
                                                alt="Anita Wijaya" 
                                                class="w-12 h-12 rounded-full object-cover border-2 border-amber-400">
                                            <div class="ml-4">
                                                <h3 class="font-bold text-gray-800">Anita Wijaya</h3>
                                                <p class="text-sm text-gray-600">Manager Perusahaan B</p>
                                                <div class="flex mt-1">
                                                    <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                    </svg>
                                                    <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                    </svg>
                                                    <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                    </svg>
                                                    <svg class="w-4 h-4 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                    </svg>
                                                    <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Navigation Buttons -->
                        <button id="prev" class="absolute left-0 top-1/2 transform -translate-y-1/2 -translate-x-4 bg-white p-3 rounded-full shadow-md hover:bg-amber-50 text-amber-500 hover:text-amber-600 transition-colors duration-200 focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>
                        <button id="next" class="absolute right-0 top-1/2 transform -translate-y-1/2 translate-x-4 bg-white p-3 rounded-full shadow-md hover:bg-amber-50 text-amber-500 hover:text-amber-600 transition-colors duration-200 focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                    
                    <!-- Dots Indicator -->
                    <div class="flex justify-center mt-8 space-x-2">
                        <button class="w-3 h-3 rounded-full bg-amber-400 dot-indicator"></button>
                        <button class="w-3 h-3 rounded-full bg-gray-300 dot-indicator"></button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Final CTA -->
        <section class="py-16 bg-gradient-to-r from-blue-700 to-blue-900 text-center text-white rounded-lg">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold mb-6">Siap Bekerja Sama Dengan Kami?</h2>
                <p class="text-xl mb-8 max-w-2xl mx-auto">Tim profesional kami siap membantu mewujudkan proyek infrastruktur telekomunikasi Anda</p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="/hubungikami" class="bg-amber-500 hover:bg-amber-600 text-white font-bold py-3 px-8 rounded-full transition duration-300 transform hover:scale-105 inline-block">
                        Hubungi Kami
                    </a>
                    <a href="/portofolio" class="bg-transparent hover:bg-white/10 border-2 border-white text-white font-bold py-3 px-8 rounded-full transition duration-300 transform hover:scale-105 inline-block">
                        Lihat Proyek Kami
                    </a>
                </div>
            </div>
        </section>
    </div>
</div>

<!-- Scripts -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize AOS animation library
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
        disable: window.innerWidth < 768 // Disable animations on mobile for better performance
    });

    // ====================== TESTIMONIAL SLIDER ======================
    const testimonialSlider = document.getElementById('testimoni-slider');
    if (testimonialSlider) {
        const slides = testimonialSlider.querySelectorAll('.min-w-full');
        const prevBtn = document.getElementById('prev');
        const nextBtn = document.getElementById('next');
        const dots = document.querySelectorAll('.dot-indicator');
        
        let currentIndex = 0;
        let autoSlideInterval;
        const slideIntervalTime = 5000; // 5 seconds
        
        // Update slider position and indicators
        function updateSlider() {
            const sliderContent = testimonialSlider.querySelector('.flex');
            if (sliderContent) {
                sliderContent.style.transform = `translateX(-${currentIndex * 100}%)`;
                sliderContent.style.transition = 'transform 0.5s ease-in-out';
            }
            
            // Update dot indicators
            dots.forEach((dot, index) => {
                if (index === currentIndex) {
                    dot.classList.add('bg-amber-400');
                    dot.classList.remove('bg-gray-300');
                } else {
                    dot.classList.remove('bg-amber-400');
                    dot.classList.add('bg-gray-300');
                }
            });
        }
        
        // Go to specific slide
        function goToSlide(index) {
            currentIndex = (index + slides.length) % slides.length;
            updateSlider();
        }
        
        // Next slide
        function nextSlide() {
            goToSlide(currentIndex + 1);
        }
        
        // Previous slide
        function prevSlide() {
            goToSlide(currentIndex - 1);
        }
        
        // Start auto slide only on desktop
        function startAutoSlide() {
            if (window.innerWidth >= 768) { // Only auto-slide on desktop
                autoSlideInterval = setInterval(nextSlide, slideIntervalTime);
            }
        }
        
        // Reset auto slide timer
        function resetAutoSlide() {
            clearInterval(autoSlideInterval);
            startAutoSlide();
        }
        
        // Event listeners for navigation buttons
        if (nextBtn) nextBtn.addEventListener('click', () => {
            nextSlide();
            resetAutoSlide();
        });
        
        if (prevBtn) prevBtn.addEventListener('click', () => {
            prevSlide();
            resetAutoSlide();
        });
        
        // Event listeners for dot indicators
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                goToSlide(index);
                resetAutoSlide();
            });
        });
        
        // Initialize slider
        updateSlider();
        startAutoSlide();
        
        // Handle window resize
        window.addEventListener('resize', function() {
            updateSlider();
            // Restart auto slide if resizing between mobile/desktop
            clearInterval(autoSlideInterval);
            startAutoSlide();
        });
    }

    // ====================== SIDEBAR MENU FOR MOBILE ======================
    function setupMobileSidebar() {
        const sidebar = document.getElementById('about-sidebar');
        if (!sidebar) return;

        // Convert sidebar to dropdown on mobile
        if (window.innerWidth < 768) {
            const nav = sidebar.querySelector('nav');
            const h2 = sidebar.querySelector('h2');
            
            // Create dropdown select element
            const select = document.createElement('select');
            select.className = 'w-full p-3 rounded-lg border border-gray-300 bg-white text-gray-700 shadow-sm focus:border-blue-500 focus:ring-blue-500 mb-4';
            
            // Add options from nav links
            const links = nav.querySelectorAll('a');
            links.forEach(link => {
                const option = document.createElement('option');
                option.value = link.getAttribute('href');
                option.textContent = link.textContent;
                select.appendChild(option);
            });
            
            // Handle selection change
            select.addEventListener('change', function() {
                const targetId = this.value;
                const targetSection = document.querySelector(targetId);
                
                if (targetSection) {
                    window.scrollTo({
                        top: targetSection.offsetTop - 80, // Adjusted for mobile header
                        behavior: 'smooth'
                    });
                    
                    // Update URL without triggering scroll
                    history.replaceState(null, null, targetId);
                }
            });
            
            // Replace nav with select on mobile
            nav.remove();
            sidebar.insertBefore(select, h2.nextSibling);
            
            // Make sidebar sticky but not full height on mobile
            sidebar.classList.remove('h-screen', 'sticky', 'top-0');
            sidebar.classList.add('sticky', 'top-16', 'z-10', 'bg-white', 'shadow-md');
        } else {
            // Restore original nav on desktop
            const select = sidebar.querySelector('select');
            if (select) {
                const nav = document.createElement('nav');
                nav.className = 'space-y-2';
                
                // Recreate links from options
                const options = select.querySelectorAll('option');
                options.forEach(option => {
                    const link = document.createElement('a');
                    link.href = option.value;
                    link.textContent = option.textContent;
                    link.className = 'block py-2 px-4 rounded hover:bg-blue-50 text-gray-700 transition-colors duration-200 sidebar-link';
                    nav.appendChild(link);
                });
                
                select.remove();
                sidebar.querySelector('h2').after(nav);
                
                // Restore sidebar styling
                sidebar.classList.add('h-screen', 'sticky', 'top-0');
                sidebar.classList.remove('top-16', 'z-10');
            }
        }
    }

    // ====================== SIDEBAR ACTIVATION ======================
    function setupSidebarNavigation() {
        const aboutPage = document.getElementById('about-page');
        if (!aboutPage) return;

        const sections = document.querySelectorAll('#about-page section');
        const sidebarLinks = document.querySelectorAll('#about-sidebar .sidebar-link, #about-sidebar select');
        const headerHeight = window.innerWidth < 768 ? 80 : 100; // Smaller offset for mobile

        // Update active sidebar link
        function updateActiveSidebar() {
            let currentSection = '';
            const scrollPosition = window.scrollY + headerHeight;

            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                
                if (scrollPosition >= sectionTop - 50 && scrollPosition < sectionTop + sectionHeight - 50) {
                    currentSection = section.id;
                }
            });

            // Handle both desktop links and mobile select
            if (window.innerWidth >= 768) {
                sidebarLinks.forEach(link => {
                    if (link.tagName === 'A') {
                        const linkHref = link.getAttribute('href').substring(1);
                        if (linkHref === currentSection) {
                            link.classList.add('text-blue-600', 'font-medium');
                            link.classList.remove('text-gray-700');
                        } else {
                            link.classList.remove('text-blue-600', 'font-medium');
                            link.classList.add('text-gray-700');
                        }
                    }
                });
            } else {
                const select = document.querySelector('#about-sidebar select');
                if (select) {
                    const options = select.options;
                    for (let i = 0; i < options.length; i++) {
                        if (options[i].value.substring(1) === currentSection) {
                            select.selectedIndex = i;
                            break;
                        }
                    }
                }
            }
        }

        // Smooth scrolling with offset for desktop
        if (window.innerWidth >= 768) {
            document.querySelectorAll('#about-sidebar .sidebar-link').forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    const targetSection = document.querySelector(targetId);
                    
                    if (targetSection) {
                        window.scrollTo({
                            top: targetSection.offsetTop - headerHeight,
                            behavior: 'smooth'
                        });
                        
                        // Update URL without triggering scroll
                        history.replaceState(null, null, targetId);
                    }
                });
            });
        }

        // Check initial hash on page load
        function checkInitialHash() {
            if (window.location.hash) {
                const targetSection = document.querySelector(window.location.hash);
                if (targetSection) {
                    setTimeout(() => {
                        window.scrollTo({
                            top: targetSection.offsetTop - headerHeight,
                            behavior: 'auto'
                        });
                    }, 100);
                }
            }
        }

        // Set up scroll event listener
        window.addEventListener('scroll', updateActiveSidebar);
        window.addEventListener('load', function() {
            updateActiveSidebar();
            checkInitialHash();
        });
    }

    // ====================== COUNTER ANIMATION ======================
    const counters = document.querySelectorAll('[data-count]');
    if (counters.length > 0) {
        const observerOptions = {
            threshold: 0.5,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    const target = +counter.getAttribute('data-count');
                    const duration = 2000; // 2 seconds
                    const increment = target / (duration / 16);
                    let current = 0;

                    const updateCounter = () => {
                        current += increment;
                        if (current < target) {
                            counter.textContent = Math.ceil(current);
                            requestAnimationFrame(updateCounter);
                        } else {
                            counter.textContent = target;
                        }
                    };

                    updateCounter();
                    observer.unobserve(counter);
                }
            });
        }, observerOptions);

        counters.forEach(counter => {
            observer.observe(counter);
        });
    }

    // ====================== RESPONSIVE ADJUSTMENTS ======================
    function handleResponsiveChanges() {
        setupMobileSidebar();
        setupSidebarNavigation();
        
        // Adjust carousel navigation buttons for mobile
        const prevBtn = document.getElementById('prev');
        const nextBtn = document.getElementById('next');
        if (window.innerWidth < 768) {
            if (prevBtn) prevBtn.classList.add('hidden');
            if (nextBtn) nextBtn.classList.add('hidden');
        } else {
            if (prevBtn) prevBtn.classList.remove('hidden');
            if (nextBtn) nextBtn.classList.remove('hidden');
        }
    }

    // Initial setup
    handleResponsiveChanges();
    
    // Re-run setup on window resize
    let resizeTimer;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            handleResponsiveChanges();
        }, 250);
    });
});
</script>

<style>
/* Custom CSS for responsive design */
@media (max-width: 767px) {
    /* Adjust hero section for mobile */
    .bg-gradient-to-r.from-blue-600.to-blue-800 {
        padding-top: 4rem;
        padding-bottom: 4rem;
    }
    
    /* Make sidebar more compact on mobile */
    #about-sidebar {
        padding: 1rem;
        margin-bottom: 1rem;
    }
    
    /* Adjust team member cards for mobile */
    .grid.grid-cols-1.md\:grid-cols-2.lg\:grid-cols-3.gap-10 {
        gap: 1.5rem;
    }
    
    /* Improve testimonial spacing on mobile */
    #testimoni .min-w-full.px-4 {
        padding-left: 1rem;
        padding-right: 1rem;
    }
    
    /* Hide dots on mobile if not needed */
    #testimoni .flex.justify-center.mt-8.space-x-2 {
        display: none;
    }
    
    /* Adjust counter section for mobile */
    .grid.grid-cols-2.md\:grid-cols-4.gap-8 {
        gap: 1.5rem;
    }
    
    /* Make final CTA buttons stack vertically on mobile */
    .flex.flex-col.sm\:flex-row.justify-center.gap-4 {
        gap: 0.75rem;
    }
    
    /* Reduce padding in sections for mobile */
    section.py-12 {
        padding-top: 2rem;
        padding-bottom: 2rem;
    }
    
    /* Adjust font sizes for mobile */
    h1.text-4xl.md\:text-5xl {
        font-size: 2.25rem;
        line-height: 2.5rem;
    }
    
    h2.text-3xl {
        font-size: 1.75rem;
    }
}

/* Custom CSS for active sidebar link */
#about-sidebar .sidebar-link.active,
#about-sidebar .sidebar-link:hover {
    @apply text-blue-600 font-medium bg-blue-50;
}

/* Smooth transition for sidebar links */
.sidebar-link {
    transition: all 0.3s ease;
}
</style>
@endsection