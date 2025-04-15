@extends('layouts.user')

@section('content')
    <!-- Hero Section with Auto Slider -->
    <div class="relative w-full h-screen max-h-[80vh] overflow-hidden">
        <!-- Slides -->
        <div class="absolute inset-0 opacity-100 transition-opacity duration-1000 ease-in-out z-10" id="slide1">
            <img src="images/hero-images.JPG" alt="Hero Image 1" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center pointer-events-none">
                <div class="text-center px-4 transform transition-all duration-1000 pointer-events-auto" data-aos="fade-up">
                    <h1 class="text-4xl md:text-6xl font-bold text-white mb-4">Inovasi Tanpa Batas</h1>
                    <p class="text-xl md:text-2xl text-white max-w-2xl mx-auto mb-8">Membangun infrastruktur telekomunikasi untuk Indonesia yang lebih terhubung</p>
                    <div class="flex gap-4 justify-center">
                        <a href="#services" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold transform hover:scale-105 transition duration-300">Layanan Kami</a>
                        <a href="/hubungikami" class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-lg font-semibold transform hover:scale-105 transition duration-300">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="absolute inset-0 opacity-0 transition-opacity duration-1000 ease-in-out pointer-events-none" id="slide2">
            <img src="images/hero-images1.JPG" alt="Hero Image 2" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center pointer-events-none">
                <div class="text-center px-4 pointer-events-auto">
                    <h1 class="text-4xl md:text-6xl font-bold text-white mb-4">Solusi Terintegrasi</h1>
                    <p class="text-xl md:text-2xl text-white max-w-2xl mx-auto mb-8">Infrastruktur telekomunikasi yang handal untuk bisnis Anda</p>
                </div>
            </div>
        </div>
        
        <div class="absolute inset-0 opacity-0 transition-opacity duration-1000 ease-in-out pointer-events-none" id="slide3">
            <img src="images/hero-images2.JPG" alt="Hero Image 3" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center pointer-events-none">
                <div class="text-center px-4 pointer-events-auto">
                    <h1 class="text-4xl md:text-6xl font-bold text-white mb-4">Teknologi Masa Depan</h1>
                    <p class="text-xl md:text-2xl text-white max-w-2xl mx-auto mb-8">Mempersiapkan jaringan untuk generasi berikutnya</p>
                </div>
            </div>
        </div>
        
        <!-- Slider Controls -->
        <div class="absolute bottom-8 left-0 right-0 flex justify-center gap-2 z-20">
            <button class="slider-dot w-3 h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 focus:outline-none transition duration-300" data-slide="0"></button>
            <button class="slider-dot w-3 h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 focus:outline-none transition duration-300" data-slide="1"></button>
            <button class="slider-dot w-3 h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 focus:outline-none transition duration-300" data-slide="2"></button>
        </div>
    </div>

    <!-- About Company Section -->
    <div class="max-w-7xl mx-auto px-4 py-16" id="about">
        <div class="flex flex-col md:flex-row items-center gap-8">
            <div class="md:w-1/2" data-aos="fade-right">
                <div class="grid grid-cols-2 gap-4">
                    <div class="relative h-64 rounded-xl overflow-hidden shadow-lg transform transition-transform duration-300 hover:scale-105">
                        <img src="images/gambar2.jpg" alt="About 1" class="absolute inset-0 w-full h-full object-cover">
                    </div>
                    <div class="relative h-64 rounded-xl overflow-hidden shadow-lg transform transition-transform duration-300 hover:scale-105">
                        <img src="images/gambar3.jpg" alt="About 2" class="absolute inset-0 w-full h-full object-cover">
                    </div>
                    <div class="relative h-64 rounded-xl overflow-hidden shadow-lg transform transition-transform duration-300 hover:scale-105">
                        <img src="images/gambar4.jpg" alt="About 3" class="absolute inset-0 w-full h-full object-cover">
                    </div>
                    <div class="relative h-64 rounded-xl overflow-hidden shadow-lg transform transition-transform duration-300 hover:scale-105">
                        <img src="images/gambar5.jpg" alt="About 4" class="absolute inset-0 w-full h-full object-cover">
                        <div class="absolute inset-0 bg-blue-600 bg-opacity-80 flex items-center justify-center">
                            <div class="text-center text-white p-4">
                                <span class="text-4xl font-bold block">15+</span>
                                <span class="text-lg">Tahun Pengalaman</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="md:w-1/2 mt-8 md:mt-0" data-aos="fade-left">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Tentang PT Semesta Pusat Kreasi</h2>
                <div class="border-l-4 border-blue-600 pl-4 mb-6">
                    <p class="text-gray-600 italic">"Membangun infrastruktur telekomunikasi yang handal untuk mendukung percepatan transformasi digital Indonesia"</p>
                </div>
                <p class="text-gray-700 mb-6">
                PT Semesta Pusat Kreasi adalah perusahaan penyedia infrastruktur telekomunikasi terkemuka di Indonesia yang beroperasi sejak 2020. Kami mengkhususkan diri dalam pengelolaan menara telekomunikasi, pembangunan infrastruktur jaringan, dan penyediaan solusi co-location untuk operator telekomunikasi.
                </p>
                <div class="space-y-3 mb-6">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 mt-1">
                            <svg class="h-5 w-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <p class="ml-3 text-gray-700">Lebih dari 15.000 menara telekomunikasi di seluruh Indonesia</p>
                    </div>
                    <div class="flex items-start">
                        <div class="flex-shrink-0 mt-1">
                            <svg class="h-5 w-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <p class="ml-3 text-gray-700">Melayani lebih dari 30 operator telekomunikasi</p>
                    </div>
                    <div class="flex items-start">
                        <div class="flex-shrink-0 mt-1">
                            <svg class="h-5 w-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <p class="ml-3 text-gray-700">Tim profesional dengan sertifikasi internasional</p>
                    </div>
                </div>
                <a href="/tentangkami" class="inline-flex items-center px-6 py-3 bg-blue-600 text-white rounded-lg font-medium hover:bg-blue-700 transform hover:scale-105 transition duration-300">
                    Selengkapnya
                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <div class="bg-gray-50 py-16" id="services">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-12" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Layanan Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Solusi lengkap untuk kebutuhan infrastruktur telekomunikasi Anda</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden transform transition-transform duration-300 hover:scale-105" data-aos="fade-up" data-aos-delay="100">
                    <div class="h-48 bg-blue-600 flex items-center justify-center">
                        <svg class="h-20 w-20 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7l4-4m0 0l4 4m-4-4v18m0 0H4m16 0h-4" />
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Pembangunan Menara</h3>
                        <p class="text-gray-600">Layanan pembangunan menara telekomunikasi dengan standar keamanan dan kualitas terbaik.</p>
                        <a href="#" class="mt-4 inline-flex items-center text-blue-600 hover:text-blue-800">
                            Detail Layanan
                            <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Service 2 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden transform transition-transform duration-300 hover:scale-105" data-aos="fade-up" data-aos-delay="200">
                    <div class="h-48 bg-blue-700 flex items-center justify-center">
                        <svg class="h-20 w-20 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Manajemen Infrastruktur</h3>
                        <p class="text-gray-600">Pengelolaan dan pemeliharaan infrastruktur telekomunikasi secara profesional.</p>
                        <a href="#" class="mt-4 inline-flex items-center text-blue-600 hover:text-blue-800">
                            Detail Layanan
                            <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Service 3 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden transform transition-transform duration-300 hover:scale-105" data-aos="fade-up" data-aos-delay="300">
                    <div class="h-48 bg-blue-800 flex items-center justify-center">
                        <svg class="h-20 w-20 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Solusi Digital</h3>
                        <p class="text-gray-600">Integrasi solusi digital untuk optimasi jaringan telekomunikasi.</p>
                        <a href="#" class="mt-4 inline-flex items-center text-blue-600 hover:text-blue-800">
                            Detail Layanan
                            <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="py-16 bg-blue-900 text-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="p-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-4xl font-bold mb-2 count-up" data-target="15000">0</div>
                    <div class="text-blue-200">Menara Telekomunikasi</div>
                </div>
                <div class="p-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-4xl font-bold mb-2 count-up" data-target="30">0</div>
                    <div class="text-blue-200">Operator Mitra</div>
                </div>
                <div class="p-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-4xl font-bold mb-2 count-up" data-target="500">0</div>
                    <div class="text-blue-200">Profesional</div>
                </div>
                <div class="p-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="text-4xl font-bold mb-2 count-up" data-target="34">0</div>
                    <div class="text-blue-200">Provinsi</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Section -->
    <div class="max-w-7xl mx-auto py-16 px-4">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Berita & Blog</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Update terbaru seputar industri telekomunikasi dan kegiatan perusahaan</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Blog 1 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-transform duration-300 hover:scale-105" data-aos="fade-up" data-aos-delay="100">
                <div class="relative h-56 w-full overflow-hidden">
                    <img src="images/blog1.jpg" alt="Blog 1" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4">
                        <span class="text-sm text-white">12 Maret 2025</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Perluasan Jaringan 5G di Indonesia Timur</h3>
                    <p class="text-gray-600 mb-4">PT Semesta Pusat Kreasi memperluas jaringan 5G ke wilayah Indonesia Timur untuk mendukung percepatan digital...</p>
                    <a href="/berita" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium">
                        Baca Selengkapnya
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Blog 2 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-transform duration-300 hover:scale-105" data-aos="fade-up" data-aos-delay="200">
                <div class="relative h-56 w-full overflow-hidden">
                    <img src="images/blog2.jpg" alt="Blog 2" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4">
                        <span class="text-sm text-white">10 Maret 2025</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Penghargaan Infrastruktur Terbaik 2025</h3>
                    <p class="text-gray-600 mb-4">Kami meraih penghargaan Infrastruktur Telekomunikasi Terbaik 2025 untuk inovasi dalam pembangunan menara...</p>
                    <a href="/berita" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium">
                        Baca Selengkapnya
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Blog 3 -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-transform duration-300 hover:scale-105" data-aos="fade-up" data-aos-delay="300">
                <div class="relative h-56 w-full overflow-hidden">
                    <img src="images/blog3.jpg" alt="Blog 3" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4">
                        <span class="text-sm text-white">8 Maret 2025</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Kerjasama dengan Operator Internasional</h3>
                    <p class="text-gray-600 mb-4">PT Semesta Pusat Kreasi menjalin kerjasama strategis dengan operator internasional untuk pengembangan jaringan...</p>
                    <a href="/berita" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium">
                        Baca Selengkapnya
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-12">
            <a href="/berita" class="inline-flex items-center px-6 py-3 border border-blue-600 text-blue-600 rounded-lg font-medium hover:bg-blue-600 hover:text-white transform hover:scale-105 transition duration-300">
                Lihat Semua Berita
                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
            </a>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-blue-600 text-white py-16">
        <div class="max-w-4xl mx-auto px-4 text-center" data-aos="fade-up">
            <h2 class="text-3xl font-bold mb-6">Siap Berkolaborasi dengan Kami?</h2>
            <p class="text-xl text-blue-100 mb-8">Kami selalu terbuka untuk diskusi tentang proyek Anda dan bagaimana kami dapat membantu mewujudkannya.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/hubungikami" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transform hover:scale-105 transition duration-300">Hubungi Kami</a>
                <a href="#services" class="bg-transparent border-2 border-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:bg-opacity-10 transform hover:scale-105 transition duration-300">Lihat Layanan</a>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        // Hero Slider
        let currentSlide = 0;
        const slides = document.querySelectorAll('[id^="slide"]');
        const dots = document.querySelectorAll('.slider-dot');
        
        function showSlide(n) {
            slides.forEach((slide, index) => {
                // Atur opacity dan pointer-events
                if (index === n) {
                    slide.style.opacity = '1';
                    slide.classList.remove('pointer-events-none');
                } else {
                    slide.style.opacity = '0';
                    slide.classList.add('pointer-events-none');
                }
            });
            
            // Update dot indicators
            dots.forEach((dot, index) => {
                dot.style.backgroundColor = index === n ? 'white' : 'rgba(255, 255, 255, 0.5)';
            });
            
            currentSlide = n;
        }
        
        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }
        
        // Manual slide control with dots
        dots.forEach(dot => {
            dot.addEventListener('click', () => {
                const slideIndex = parseInt(dot.getAttribute('data-slide'));
                showSlide(slideIndex);
            });
        });
        
        // Auto slide change every 5 seconds
        setInterval(nextSlide, 5000);
        
        // Initialize first slide
        showSlide(0);
        
        // Animate numbers counting up
        function animateCountUp() {
            const countUpElements = document.querySelectorAll('.count-up');
            
            countUpElements.forEach(element => {
                const target = parseInt(element.getAttribute('data-target'));
                const duration = 2000; // 2 seconds
                const step = target / (duration / 16); // 60fps
                let current = 0;
                
                const updateCount = () => {
                    current += step;
                    if (current < target) {
                        element.textContent = Math.floor(current);
                        requestAnimationFrame(updateCount);
                    } else {
                        element.textContent = target;
                    }
                };
                
                // Only start animation when element is in viewport
                const observer = new IntersectionObserver((entries) => {
                    if (entries[0].isIntersecting) {
                        updateCount();
                        observer.unobserve(element);
                    }
                });
                
                observer.observe(element);
            });
        }
        
        // Initialize animations when page loads
        document.addEventListener('DOMContentLoaded', () => {
            // Initialize AOS (Animate On Scroll) if not already initialized
            if (typeof AOS !== 'undefined') {
                AOS.init({
                    duration: 800,
                    easing: 'ease-in-out',
                    once: true
                });
            }
            
            // Start count up animation
            animateCountUp();
        });
    </script>
@endsection