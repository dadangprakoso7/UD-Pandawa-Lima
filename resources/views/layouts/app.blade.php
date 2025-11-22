<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'UMKM Profile')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hover-scale {
            transition: transform 0.3s ease;
        }

        .hover-scale:hover {
            transform: scale(1.05);
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        .float-animation {
            animation: float 3s ease-in-out infinite;
        }
    </style>
    @stack('styles')
</head>

<body class="bg-gray-50">
    <!-- Navbar -->
    <nav class="gradient-bg2 shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center space-x-3">
                    <img src="https://images.unsplash.com/photo-1599305445671-ac291c95aaa9?w=100&h=100&fit=crop"
                        alt="Logo" class="h-12 w-12 rounded-full border-2 border-white shadow-lg">
                    <div>
                        <h1 class="text-2xl font-bold text-white">UMKM Makmur</h1>
                        <p class="text-xs text-white/80">Produk Berkualitas, Harga Terjangkau</p>
                    </div>
                </div>

                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}"
                        class="text-white hover:text-white/80 transition font-medium {{ request()->routeIs('home') ? 'border-b-2 border-white pb-1' : '' }}">
                        <i class="fas fa-home mr-2"></i>Beranda
                    </a>
                    <a href="{{ route('products') }}"
                        class="text-white hover:text-white/80 transition font-medium {{ request()->routeIs('products') ? 'border-b-2 border-white pb-1' : '' }}">
                        <i class="fas fa-box mr-2"></i>Produk
                    </a>
                    <a href="#contact" class="text-white hover:text-white/80 transition font-medium">
                        <i class="fas fa-phone mr-2"></i>Kontak
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="mobile-menu-btn" class="text-white hover:text-white/80">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>

            <!-- Mobile menu -->
            <div id="mobile-menu" class="hidden md:hidden pb-4">
                <a href="{{ route('home') }}" class="block text-white hover:bg-white/10 px-4 py-2 rounded transition">
                    <i class="fas fa-home mr-2"></i>Beranda
                </a>
                <a href="{{ route('products') }}"
                    class="block text-white hover:bg-white/10 px-4 py-2 rounded transition">
                    <i class="fas fa-box mr-2"></i>Produk
                </a>
                <a href="#contact" class="block text-white hover:bg-white/10 px-4 py-2 rounded transition">
                    <i class="fas fa-phone mr-2"></i>Kontak
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center space-x-3 mb-4">
                        <img src="https://images.unsplash.com/photo-1599305445671-ac291c95aaa9?w=100&h=100&fit=crop"
                            alt="Logo" class="h-12 w-12 rounded-full">
                        <h3 class="text-2xl font-bold">UMKM Makmur</h3>
                    </div>
                    <p class="text-gray-400 mb-4">
                        Kami adalah UMKM yang berkomitmen menghadirkan produk berkualitas tinggi dengan harga
                        terjangkau.
                        Kepuasan pelanggan adalah prioritas utama kami.
                    </p>
                    <div class="flex space-x-4">
                        <a href="https://facebook.com" target="_blank"
                            class="bg-blue-600 hover:bg-blue-700 p-3 rounded-full transition hover-scale">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://instagram.com" target="_blank"
                            class="bg-gradient-to-br from-purple-600 to-pink-500 hover:from-purple-700 hover:to-pink-600 p-3 rounded-full transition hover-scale">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://twitter.com" target="_blank"
                            class="bg-blue-400 hover:bg-blue-500 p-3 rounded-full transition hover-scale">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://tiktok.com" target="_blank"
                            class="bg-black hover:bg-gray-800 p-3 rounded-full transition hover-scale">
                            <i class="fab fa-tiktok"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Tautan Cepat</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" class="text-gray-400 hover:text-white transition">Beranda</a>
                        </li>
                        <li><a href="{{ route('products') }}"
                                class="text-gray-400 hover:text-white transition">Produk</a></li>
                        <li><a href="#about" class="text-gray-400 hover:text-white transition">Tentang Kami</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-white transition">Kontak</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div id="contact">
                    <h4 class="text-lg font-semibold mb-4">Kontak Kami</h4>
                    <ul class="space-y-3 text-gray-400">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-3 text-purple-500"></i>
                            <span>Jl. Raya Perdagangan No. 123, Surabaya, Jawa Timur 60111</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone mr-3 text-purple-500"></i>
                            <span>+62 812-3456-7890</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-3 text-purple-500"></i>
                            <span>info@umkmmakmur.com</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2025 UMKM Makmur. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

    @stack('scripts')
</body>

</html>
