@extends('layouts.user')

@section('content')  
<head>
    <style>
        .news-card {
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }
        .news-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0,0,0,0) 60%, rgba(0,0,0,0.7));
            z-index: 1;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .news-card:hover::before {
            opacity: 1;
        }
        .news-card img {
            transition: transform 0.5s ease;
        }
        .news-card:hover img {
            transform: scale(1.05);
        }
        .news-content {
            position: relative;
            z-index: 2;
        }
        .category-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            z-index: 3;
            background-color: rgba(59, 130, 246, 0.9);
            color: white;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
        }
        .news-date {
            position: absolute;
            top: 15px;
            right: 15px;
            z-index: 3;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 0.75rem;
        }
        .news-title {
            transition: color 0.3s ease;
        }
        .news-card:hover .news-title {
            color: #3b82f6;
        }
        .read-more-btn {
            opacity: 0;
            transform: translateY(10px);
            transition: all 0.3s ease;
        }
        .news-card:hover .read-more-btn {
            opacity: 1;
            transform: translateY(0);
        }
        .trending-news {
            border-left: 4px solid #3b82f6;
        }
        .news-tabs button.active {
            border-bottom: 3px solid #3b82f6;
            color: #3b82f6;
            font-weight: 600;
        }
        .newsletter-input:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.3);
        }
    </style>
</head>
    <main class="pt-3 pb-12 mb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- News Header with Tabs -->
            <div class="flex flex-col md:flex-row justify-between items-center mb-8 border-b border-gray-200 pb-4">
                <h1 class="text-4xl font-bold text-gray-800 mb-4 md:mb-0">Berita Terkini</h1>
                <div class="news-tabs flex space-x-6">
                    <button class="active pb-2 px-1 text-gray-700 transition duration-300">Semua</button>
                    <button class="pb-2 px-1 text-gray-500 hover:text-gray-700 transition duration-300">Politik</button>
                    <button class="pb-2 px-1 text-gray-500 hover:text-gray-700 transition duration-300">Ekonomi</button>
                    <button class="pb-2 px-1 text-gray-500 hover:text-gray-700 transition duration-300">Teknologi</button>
                    <button class="pb-2 px-1 text-gray-500 hover:text-gray-700 transition duration-300">Kesehatan</button>
                </div>
            </div>

            <!-- Featured News Section -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold mb-6 flex items-center">
                    <span class="w-2 h-6 bg-blue-500 mr-3"></span>
                    Berita Utama
                </h2>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- Main Featured News -->
                    <div class="lg:col-span-2 bg-white rounded-xl shadow-md overflow-hidden news-card">
                        <div class="relative h-80 overflow-hidden">
                            <img src="images/blog1.jpg" alt="Berita Utama" class="w-full h-full object-cover">
                            <span class="category-badge">Headline</span>
                            <span class="news-date">12 Juni 2023</span>
                        </div>
                        <div class="p-6 news-content">
                            <div class="flex items-center mb-3">
                                <span class="text-sm text-gray-500">By Admin</span>
                                <span class="mx-2 text-gray-300">•</span>
                                <span class="text-sm text-gray-500">5 min read</span>
                            </div>
                            <h2 class="text-2xl font-bold mb-3 news-title">Judul Berita Utama yang Menarik Perhatian Pembaca</h2>
                            <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            <a href="#" class="read-more-btn inline-flex items-center text-blue-500 font-semibold hover:text-blue-700">
                                Baca Selengkapnya
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Trending News Sidebar -->
                    <div class="space-y-6">
                        <div class="bg-white p-4 rounded-xl shadow-md trending-news">
                            <h3 class="font-bold text-lg mb-4 text-gray-800">Trending Hari Ini</h3>
                            <div class="space-y-4">
                                <div class="flex items-start space-x-3 group cursor-pointer">
                                    <div class="flex-shrink-0 w-16 h-16 rounded-md overflow-hidden">
                                        <img src="images/blog2.jpg" alt="Trending 1" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-800 group-hover:text-blue-500 transition duration-300">Judul Berita Trending 1</h4>
                                        <p class="text-xs text-gray-500">2 jam yang lalu</p>
                                    </div>
                                </div>
                                <div class="flex items-start space-x-3 group cursor-pointer">
                                    <div class="flex-shrink-0 w-16 h-16 rounded-md overflow-hidden">
                                        <img src="images/blog3.jpg" alt="Trending 2" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-800 group-hover:text-blue-500 transition duration-300">Judul Berita Trending 2</h4>
                                        <p class="text-xs text-gray-500">5 jam yang lalu</p>
                                    </div>
                                </div>
                                <div class="flex items-start space-x-3 group cursor-pointer">
                                    <div class="flex-shrink-0 w-16 h-16 rounded-md overflow-hidden">
                                        <img src="images/blog1.jpg" alt="Trending 3" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-800 group-hover:text-blue-500 transition duration-300">Judul Berita Trending 3</h4>
                                        <p class="text-xs text-gray-500">8 jam yang lalu</p>
                                    </div>
                                </div>
                                <div class="flex items-start space-x-3 group cursor-pointer">
                                    <div class="flex-shrink-0 w-16 h-16 rounded-md overflow-hidden">
                                        <img src="images/blog2.jpg" alt="Trending 4" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-800 group-hover:text-blue-500 transition duration-300">Judul Berita Trending 4</h4>
                                        <p class="text-xs text-gray-500">10 jam yang lalu</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Newsletter Subscription -->
                        <div class="bg-gradient-to-r from-blue-500 to-blue-600 rounded-xl shadow-md p-6 text-white">
                            <h3 class="font-bold text-xl mb-2">Berlangganan Newsletter</h3>
                            <p class="text-sm mb-4 opacity-90">Dapatkan update berita terbaru langsung ke email Anda</p>
                            <div class="flex">
                                <input type="email" placeholder="Alamat email Anda" class="newsletter-input flex-grow px-4 py-2 rounded-l-md text-gray-800 focus:ring-2 focus:ring-white">
                                <button class="bg-blue-700 hover:bg-blue-800 px-4 py-2 rounded-r-md text-sm font-medium transition duration-300">
                                    Subscribe
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Latest News Grid -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold mb-6 flex items-center">
                    <span class="w-2 h-6 bg-blue-500 mr-3"></span>
                    Berita Terbaru
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- News Item 1 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden news-card">
                        <div class="relative h-48 overflow-hidden">
                            <img src="images/blog2.jpg" alt="Berita 1" class="w-full h-full object-cover">
                            <span class="category-badge">Politik</span>
                            <span class="news-date">10 Juni 2023</span>
                        </div>
                        <div class="p-6 news-content">
                            <h2 class="text-xl font-bold mb-3 news-title">Judul Berita Terbaru 1 dengan Beberapa Kata</h2>
                            <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore.</p>
                            <a href="#" class="read-more-btn inline-flex items-center text-blue-500 font-semibold hover:text-blue-700">
                                Baca Selengkapnya
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- News Item 2 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden news-card">
                        <div class="relative h-48 overflow-hidden">
                            <img src="images/blog3.jpg" alt="Berita 2" class="w-full h-full object-cover">
                            <span class="category-badge">Ekonomi</span>
                            <span class="news-date">9 Juni 2023</span>
                        </div>
                        <div class="p-6 news-content">
                            <h2 class="text-xl font-bold mb-3 news-title">Judul Berita Terbaru 2 yang Menarik</h2>
                            <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore.</p>
                            <a href="#" class="read-more-btn inline-flex items-center text-blue-500 font-semibold hover:text-blue-700">
                                Baca Selengkapnya
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- News Item 3 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden news-card">
                        <div class="relative h-48 overflow-hidden">
                            <img src="images/blog1.jpg" alt="Berita 3" class="w-full h-full object-cover">
                            <span class="category-badge">Teknologi</span>
                            <span class="news-date">8 Juni 2023</span>
                        </div>
                        <div class="p-6 news-content">
                            <h2 class="text-xl font-bold mb-3 news-title">Inovasi Teknologi Terbaru di Tahun 2023</h2>
                            <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore.</p>
                            <a href="#" class="read-more-btn inline-flex items-center text-blue-500 font-semibold hover:text-blue-700">
                                Baca Selengkapnya
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- News Item 4 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden news-card">
                        <div class="relative h-48 overflow-hidden">
                            <img src="images/blog2.jpg" alt="Berita 4" class="w-full h-full object-cover">
                            <span class="category-badge">Kesehatan</span>
                            <span class="news-date">7 Juni 2023</span>
                        </div>
                        <div class="p-6 news-content">
                            <h2 class="text-xl font-bold mb-3 news-title">Tips Menjaga Kesehatan di Musim Pancaroba</h2>
                            <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore.</p>
                            <a href="#" class="read-more-btn inline-flex items-center text-blue-500 font-semibold hover:text-blue-700">
                                Baca Selengkapnya
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- News Item 5 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden news-card">
                        <div class="relative h-48 overflow-hidden">
                            <img src="images/blog3.jpg" alt="Berita 5" class="w-full h-full object-cover">
                            <span class="category-badge">Olahraga</span>
                            <span class="news-date">6 Juni 2023</span>
                        </div>
                        <div class="p-6 news-content">
                            <h2 class="text-xl font-bold mb-3 news-title">Prestasi Atlet Nasional di Kancah Internasional</h2>
                            <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore.</p>
                            <a href="#" class="read-more-btn inline-flex items-center text-blue-500 font-semibold hover:text-blue-700">
                                Baca Selengkapnya
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- News Item 6 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden news-card">
                        <div class="relative h-48 overflow-hidden">
                            <img src="images/blog1.jpg" alt="Berita 6" class="w-full h-full object-cover">
                            <span class="category-badge">Pendidikan</span>
                            <span class="news-date">5 Juni 2023</span>
                        </div>
                        <div class="p-6 news-content">
                            <h2 class="text-xl font-bold mb-3 news-title">Reformasi Sistem Pendidikan Nasional</h2>
                            <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore.</p>
                            <a href="#" class="read-more-btn inline-flex items-center text-blue-500 font-semibold hover:text-blue-700">
                                Baca Selengkapnya
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Load More Button -->
            <div class="text-center mt-8">
                <button class="bg-white border border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white px-6 py-3 rounded-full font-medium transition duration-300 shadow-md hover:shadow-lg">
                    Muat Lebih Banyak Berita
                </button>
            </div>

            <!-- Popular Tags -->
            <div class="mt-12">
                <h2 class="text-2xl font-bold mb-6 flex items-center">
                    <span class="w-2 h-6 bg-blue-500 mr-3"></span>
                    Tag Populer
                </h2>
                <div class="flex flex-wrap gap-3">
                    <a href="#" class="bg-gray-100 hover:bg-blue-500 hover:text-white px-4 py-2 rounded-full text-sm font-medium transition duration-300">#Politik</a>
                    <a href="#" class="bg-gray-100 hover:bg-blue-500 hover:text-white px-4 py-2 rounded-full text-sm font-medium transition duration-300">#Ekonomi</a>
                    <a href="#" class="bg-gray-100 hover:bg-blue-500 hover:text-white px-4 py-2 rounded-full text-sm font-medium transition duration-300">#Teknologi</a>
                    <a href="#" class="bg-gray-100 hover:bg-blue-500 hover:text-white px-4 py-2 rounded-full text-sm font-medium transition duration-300">#Kesehatan</a>
                    <a href="#" class="bg-gray-100 hover:bg-blue-500 hover:text-white px-4 py-2 rounded-full text-sm font-medium transition duration-300">#Olahraga</a>
                    <a href="#" class="bg-gray-100 hover:bg-blue-500 hover:text-white px-4 py-2 rounded-full text-sm font-medium transition duration-300">#Pendidikan</a>
                    <a href="#" class="bg-gray-100 hover:bg-blue-500 hover:text-white px-4 py-2 rounded-full text-sm font-medium transition duration-300">#Internasional</a>
                    <a href="#" class="bg-gray-100 hover:bg-blue-500 hover:text-white px-4 py-2 rounded-full text-sm font-medium transition duration-300">#Hukum</a>
                </div>
            </div>
        </div>
    </main>

    <!-- JavaScript for Interactive Elements -->
    <script>
        // Tab switching functionality
        document.addEventListener('DOMContentLoaded', function() {
            const tabs = document.querySelectorAll('.news-tabs button');
            
            tabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    // Remove active class from all tabs
                    tabs.forEach(t => t.classList.remove('active', 'text-gray-700'));
                    tabs.forEach(t => t.classList.add('text-gray-500'));
                    
                    // Add active class to clicked tab
                    this.classList.add('active', 'text-gray-700'));
                    this.classList.remove('text-gray-500'));
                    
                    // Here you would typically load content for the selected tab
                    // For demo purposes, we're just changing the UI
                });
            });
            
            // Smooth scroll for "Load More" button
            const loadMoreBtn = document.querySelector('button[class*="hover:bg-blue-500"]');
            if (loadMoreBtn) {
                loadMoreBtn.addEventListener('click', function() {
                    // Here you would typically load more news items via AJAX
                    // For demo, we'll just show an alert
                    alert('Loading more news...');
                });
            }
            
            // Newsletter form submission
            const newsletterForm = document.querySelector('.bg-gradient-to-r');
            if (newsletterForm) {
                newsletterForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    const emailInput = this.querySelector('input[type="email"]');
                    if (emailInput.value) {
                        alert('Terima kasih telah berlangganan newsletter kami!');
                        emailInput.value = '';
                    } else {
                        alert('Silakan masukkan alamat email Anda.');
                    }
                });
            }
            
            // Add hover effect to news cards
            const newsCards = document.querySelectorAll('.news-card');
            newsCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.querySelector('.read-more-btn').style.opacity = '1';
                    this.querySelector('.read-more-btn').style.transform = 'translateY(0)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.querySelector('.read-more-btn').style.opacity = '0';
                    this.querySelector('.read-more-btn').style.transform = 'translateY(10px)';
                });
            });
        });
    </script>
@endsection