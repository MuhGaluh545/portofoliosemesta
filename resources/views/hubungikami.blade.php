@extends('layouts.user')

@section('content')
<head>
    <style>
        /* Enhanced animations */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
        .fade-in.show {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Pulse animation for important elements */
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        .pulse:hover {
            animation: pulse 2s infinite;
        }
        
        /* Gradient background */
        .gradient-bg {
            background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
        }
    </style>
</head>
    <div class="container mx-auto mb-20 p-6 fade-in">
        <!-- Hero Section with Animated Title -->
        <div class="text-center mb-12">
            <div class="inline-block mb-4">
                <span class="text-5xl font-bold text-blue-900 block md:inline">Hubungi Kami</span>
                <span class="text-4xl font-bold text-blue-600 block md:inline ml-0 md:ml-4">Kami Siap Membantu</span>
            </div>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto text-lg">
                Punya pertanyaan atau butuh bantuan? Tim kami siap merespons dengan cepat. Isi formulir atau hubungi kami langsung.
            </p>
            
            <!-- Animated CTA -->
            <div class="mt-8 pulse">
                <a href="#contact-form" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-full shadow-lg transition-all duration-300 inline-block">
                    Kirim Pesan Sekarang <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
        
        <!-- Contact Cards Grid -->
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Contact Form Card -->
            <div id="contact-form" class="bg-white p-8 shadow-xl rounded-2xl transform hover:scale-[1.01] transition duration-300 border border-blue-100">
                <div class="flex items-center mb-6">
                    <div class="bg-blue-100 p-3 rounded-full mr-4">
                        <i class="fas fa-paper-plane text-blue-600 text-xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800">Kirim Pesan Langsung</h3>
                </div>
                
                <form action="#" method="POST" class="space-y-5">
                    @csrf
                    <div class="space-y-1">
                        <label class="block font-medium text-gray-700">Nama Lengkap <span class="text-red-500">*</span></label>
                        <input type="text" name="nama" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-400 focus:border-transparent transition-all" required placeholder="Nama Anda">
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div class="space-y-1">
                            <label class="block font-medium text-gray-700">Email <span class="text-red-500">*</span></label>
                            <input type="email" name="email" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-400 focus:border-transparent transition-all" required placeholder="email@contoh.com">
                        </div>
                        <div class="space-y-1">
                            <label class="block font-medium text-gray-700">Nomor Telepon</label>
                            <input type="tel" name="phone" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-400 focus:border-transparent transition-all" placeholder="0812-3456-7890">
                        </div>
                    </div>
                    
                    <div class="space-y-1">
                        <label class="block font-medium text-gray-700">Subjek</label>
                        <select name="subject" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-400 focus:border-transparent transition-all">
                            <option value="general">Pertanyaan Umum</option>
                            <option value="support">Bantuan Teknis</option>
                            <option value="partnership">Kemitraan</option>
                            <option value="feedback">Feedback/Saran</option>
                        </select>
                    </div>
                    
                    <div class="space-y-1">
                        <label class="block font-medium text-gray-700">Pesan Anda <span class="text-red-500">*</span></label>
                        <textarea name="pesan" rows="5" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-400 focus:border-transparent transition-all" required placeholder="Tulis pesan Anda disini..."></textarea>
                    </div>
                    
                    <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-blue-800 text-white py-3 px-4 rounded-lg hover:from-blue-700 hover:to-blue-900 transform hover:scale-[1.01] transition duration-300 font-bold shadow-md">
                        <i class="fas fa-paper-plane mr-2"></i> Kirim Pesan
                    </button>
                </form>
            </div>
            
            <!-- Contact Info Card -->
            <div class="gradient-bg text-white p-8 shadow-xl rounded-2xl transform hover:scale-[1.01] transition duration-300 relative overflow-hidden">
                <!-- Decorative elements -->
                <div class="absolute -top-10 -right-10 w-32 h-32 bg-blue-800 rounded-full opacity-20"></div>
                <div class="absolute -bottom-5 -left-5 w-20 h-20 bg-blue-400 rounded-full opacity-30"></div>
                
                <div class="relative z-10">
                    <div class="flex items-center mb-8">
                        <div class="bg-white bg-opacity-20 p-3 rounded-full mr-4">
                            <i class="fas fa-headset text-white text-xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold">Informasi Kontak</h3>
                    </div>
                    
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="mt-1 mr-4 text-blue-200">
                                <i class="fas fa-map-marker-alt text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg">Kantor Pusat</h4>
                                <p class="text-blue-100">360 King Street, Jakarta Selatan, Indonesia 12540</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="mt-1 mr-4 text-blue-200">
                                <i class="fas fa-phone-alt text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg">Telepon</h4>
                                <p class="text-blue-100">(021) 900-200-300</p>
                                <p class="text-blue-100">+62 812-3456-7890 (WhatsApp)</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="mt-1 mr-4 text-blue-200">
                                <i class="fas fa-envelope text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg">Email</h4>
                                <p class="text-blue-100">info@PTSemesta.com</p>
                                <p class="text-blue-100">support@PTSemesta.com</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="mt-1 mr-4 text-blue-200">
                                <i class="fas fa-clock text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg">Jam Operasional</h4>
                                <p class="text-blue-100">Senin-Jumat: 08:00 - 17:00 WIB</p>
                                <p class="text-blue-100">Sabtu: 08:00 - 14:00 WIB</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Social Media -->
                    <div class="mt-10">
                        <h4 class="font-bold text-lg mb-4">Ikuti Kami</h4>
                        <div class="flex space-x-5">
                            <a href="#" class="bg-white bg-opacity-20 hover:bg-opacity-30 w-12 h-12 rounded-full flex items-center justify-center text-xl transform hover:scale-110 transition duration-300">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="bg-white bg-opacity-20 hover:bg-opacity-30 w-12 h-12 rounded-full flex items-center justify-center text-xl transform hover:scale-110 transition duration-300">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="bg-white bg-opacity-20 hover:bg-opacity-30 w-12 h-12 rounded-full flex items-center justify-center text-xl transform hover:scale-110 transition duration-300">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="bg-white bg-opacity-20 hover:bg-opacity-30 w-12 h-12 rounded-full flex items-center justify-center text-xl transform hover:scale-110 transition duration-300">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="bg-white bg-opacity-20 hover:bg-opacity-30 w-12 h-12 rounded-full flex items-center justify-center text-xl transform hover:scale-110 transition duration-300">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Map Section -->
        <div class="max-w-7xl mx-auto mt-16 fade-in">
            <div class="bg-white p-8 shadow-xl rounded-2xl">
                <div class="flex items-center mb-6">
                    <div class="bg-blue-100 p-3 rounded-full mr-4">
                        <i class="fas fa-map-marked-alt text-blue-600 text-xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800">Lokasi Kami</h3>
                </div>
                
                <div class="aspect-w-16 aspect-h-9 rounded-xl overflow-hidden shadow-lg">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d106.81916135000001!3d-6.194741999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5390917b759%3A0x6b462cb9e75a5003!2s360%20King%20Street%2C%20Jakarta!5e0!3m2!1sen!2sid!4v1620000000000!5m2!1sen!2sid" 
                        width="100%" 
                        height="450" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy"
                        class="rounded-xl"
                    ></iframe>
                </div>
                
                <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-blue-50 p-5 rounded-lg border border-blue-100">
                        <h4 class="font-bold text-blue-800 mb-2"><i class="fas fa-subway mr-2"></i> Transportasi Umum</h4>
                        <p class="text-gray-700">5 menit jalan kaki dari Stasiun Sudirman. Beberapa jalur bus melewati depan kantor kami.</p>
                    </div>
                    <div class="bg-blue-50 p-5 rounded-lg border border-blue-100">
                        <h4 class="font-bold text-blue-800 mb-2"><i class="fas fa-car mr-2"></i> Parkir</h4>
                        <p class="text-gray-700">Area parkir luas tersedia di basement gedung dengan kapasitas 200 mobil.</p>
                    </div>
                    <div class="bg-blue-50 p-5 rounded-lg border border-blue-100">
                        <h4 class="font-bold text-blue-800 mb-2"><i class="fas fa-wheelchair mr-2"></i> Aksesibilitas</h4>
                        <p class="text-gray-700">Gedung kami ramah difabel dengan lift dan toilet khusus.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- FAQ Section -->
        <div class="max-w-4xl mx-auto mt-16 fade-in">
            <div class="text-center mb-10">
                <h3 class="text-3xl font-bold text-blue-900">Pertanyaan yang Sering Diajukan</h3>
                <p class="text-gray-600 mt-2">Temukan jawaban atas pertanyaan umum seputar layanan kami</p>
            </div>
            
            <div class="space-y-4">
                <div class="border border-gray-200 rounded-xl overflow-hidden">
                    <button class="faq-toggle w-full flex justify-between items-center p-5 bg-blue-50 hover:bg-blue-100 transition duration-200">
                        <span class="text-left font-medium text-blue-900">Berapa lama waktu respon untuk pesan yang dikirim?</span>
                        <i class="fas fa-chevron-down text-blue-600 transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content hidden p-5 bg-white">
                        <p class="text-gray-700">Kami berusaha merespons semua pesan dalam waktu 1-2 jam kerja pada hari kerja. Untuk pesan di luar jam kerja atau akhir pekan, kami akan merespons pada hari kerja berikutnya.</p>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-xl overflow-hidden">
                    <button class="faq-toggle w-full flex justify-between items-center p-5 bg-blue-50 hover:bg-blue-100 transition duration-200">
                        <span class="text-left font-medium text-blue-900">Apakah ada nomor darurat yang bisa dihubungi?</span>
                        <i class="fas fa-chevron-down text-blue-600 transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content hidden p-5 bg-white">
                        <p class="text-gray-700">Ya, untuk keadaan darurat Anda dapat menghubungi +62 812-3456-7890 (24 jam). Tim khusus kami siap membantu Anda kapan saja.</p>
                    </div>
                </div>
                
                <div class="border border-gray-200 rounded-xl overflow-hidden">
                    <button class="faq-toggle w-full flex justify-between items-center p-5 bg-blue-50 hover:bg-blue-100 transition duration-200">
                        <span class="text-left font-medium text-blue-900">Bagaimana cara melamar kerja di perusahaan ini?</span>
                        <i class="fas fa-chevron-down text-blue-600 transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content hidden p-5 bg-white">
                        <p class="text-gray-700">Silakan kunjungi halaman karir di website kami atau kirim CV dan portofolio Anda ke hr@PTSemesta.com. Kami akan menghubungi Anda jika ada posisi yang sesuai.</p>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-8">
                <p class="text-gray-600">Tidak menemukan jawaban yang Anda cari? <a href="#contact-form" class="text-blue-600 font-medium hover:underline">Hubungi kami langsung</a></p>
            </div>
        </div>
    </div>

    <script>
        // Enhanced animations
        document.addEventListener("DOMContentLoaded", function () {
            // Fade in elements
            document.querySelector(".fade-in").classList.add("show");
            
            // Animate elements sequentially
            const elements = document.querySelectorAll('.fade-in');
            elements.forEach((el, index) => {
                setTimeout(() => {
                    el.classList.add('show');
                }, 150 * index);
            });
            
            // FAQ toggle functionality
            const faqToggles = document.querySelectorAll('.faq-toggle');
            faqToggles.forEach(toggle => {
                toggle.addEventListener('click', () => {
                    const content = toggle.nextElementSibling;
                    const icon = toggle.querySelector('i');
                    
                    // Toggle content
                    content.classList.toggle('hidden');
                    
                    // Rotate icon
                    icon.classList.toggle('transform');
                    icon.classList.toggle('rotate-180');
                    
                    // Close other open FAQs
                    faqToggles.forEach(otherToggle => {
                        if (otherToggle !== toggle) {
                            otherToggle.nextElementSibling.classList.add('hidden');
                            otherToggle.querySelector('i').classList.remove('transform', 'rotate-180');
                        }
                    });
                });
            });
            
            // Form submission animation
            const form = document.querySelector('form');
            if (form) {
                form.addEventListener('submit', (e) => {
                    const submitBtn = form.querySelector('button[type="submit"]');
                    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Mengirim...';
                    submitBtn.disabled = true;
                });
            }
        });
        
        // Floating animation for CTA
        const cta = document.querySelector('.pulse');
        if (cta) {
            setInterval(() => {
                cta.style.transform = 'translateY(-5px)';
                setTimeout(() => {
                    cta.style.transform = 'translateY(0)';
                }, 1000);
            }, 2000);
        }
    </script>
@endsection