@extends('layouts.app')

@section('title', 'Beranda - UMKM Makmur')

@section('content')
    <style>
        /* Definisi untuk gradient-bg (kombinasi warna rengginang) */
        .gradient-bg {
            background-image: linear-gradient(to right bottom, var(--tw-gradient-stops));
            --tw-gradient-from: #e3c9a7;
            /* amber-500 */
            --tw-gradient-to: #d2b48c;
            /* amber-700 */
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
        }

        .gradient-bg2 {
            background-image: linear-gradient(to right bottom, var(--tw-gradient-stops));
            --tw-gradient-from: #667259;
            /* amber-500 */
            --tw-gradient-to: #414A37;
            /* amber-700 */
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
        }

        /* Definisi untuk gradient-text (memastikan teks tetap terbaca) */
        .gradient-text {
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-image: linear-gradient(to right, #d97706, #f59e0b);
            /* amber-700 ke amber-500 */
        }
    </style>

    <section class="relative gradient-bg overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-72 h-72 bg-white rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 relative">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="text-white">
                    <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">
                        Produk Berkualitas untuk Keluarga Indonesia
                    </h1>
                    <p class="text-xl mb-8 text-white/90">
                        Nikmati kelezatan produk UMKM lokal dengan kualitas terbaik dan harga yang terjangkau untuk semua
                        kalangan
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="{{ route('products') }}"
                            class="bg-white text-amber-600 px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition hover-scale shadow-xl">
                            <i class="fas fa-shopping-bag mr-2"></i>Lihat Produk
                        </a>
                        <a href="#about"
                            class="glass-effect text-white px-8 py-4 rounded-full font-semibold hover:bg-white/20 transition">
                            <i class="fas fa-info-circle mr-2"></i>Tentang Kami
                        </a>
                    </div>
                </div>

                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=600&h=600&fit=crop" alt="Products"
                        class="rounded-3xl shadow-2xl float-animation">
                    <div class="absolute -bottom-6 -left-6 bg-white p-6 rounded-2xl shadow-xl">
                        <div class="flex items-center space-x-3">
                            <div class="bg-green-500 p-3 rounded-full">
                                <i class="fas fa-check text-white text-xl"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Kualitas Terjamin</p>
                                <p class="text-xl font-bold text-gray-800">100% Halal</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    ---

    <section id="about" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Tentang <span class="gradient-text">Kami</span></h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Mengenal lebih dekat perjalanan kami dalam menghadirkan produk terbaik
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=600&h=500&fit=crop" alt="About Us"
                        class="rounded-3xl shadow-xl">
                </div>

                <div>
                    <h3 class="text-3xl font-bold text-gray-800 mb-6">Latar Belakang</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        UMKM Makmur didirikan pada tahun 2020 dengan visi untuk menghadirkan produk makanan dan minuman
                        berkualitas tinggi
                        yang terjangkau bagi seluruh lapisan masyarakat. Kami percaya bahwa setiap orang berhak menikmati
                        produk berkualitas tanpa harus
                        menguras kantong.
                    </p>
                    <p class="text-gray-600 mb-8 leading-relaxed">
                        Dengan komitmen pada kualitas dan kepuasan pelanggan, kami terus berinovasi menghadirkan
                        produk-produk
                        terbaik yang memenuhi standar kesehatan dan keamanan pangan.
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-gradient-to-br from-amber-50 to-orange-50 p-6 rounded-2xl">
                            <div class="bg-amber-600 w-12 h-12 rounded-full flex items-center justify-center mb-4">
                                <i class="fas fa-bullseye text-white text-xl"></i>
                            </div>
                            <h4 class="font-bold text-gray-800 mb-2">Visi</h4>
                            <p class="text-gray-600 text-sm">
                                Menjadi UMKM terpercaya yang menghadirkan produk berkualitas tinggi untuk seluruh Indonesia
                            </p>
                        </div>

                        <div class="bg-gradient-to-br from-orange-50 to-amber-50 p-6 rounded-2xl">
                            <div class="bg-orange-600 w-12 h-12 rounded-full flex items-center justify-center mb-4">
                                <i class="fas fa-rocket text-white text-xl"></i>
                            </div>
                            <h4 class="font-bold text-gray-800 mb-2">Misi</h4>
                            <p class="text-gray-600 text-sm">
                                Memberikan produk terbaik dengan harga terjangkau dan pelayanan yang memuaskan
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    ---

    <section class="py-20 gradient-bg2">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center text-white">
                    <div class="text-5xl font-bold mb-2">100+</div>
                    <div class="text-white/80">Produk</div>
                </div>
                <div class="text-center text-white">
                    <div class="text-5xl font-bold mb-2">5000+</div>
                    <div class="text-white/80">Pelanggan Puas</div>
                </div>
                <div class="text-center text-white">
                    <div class="text-5xl font-bold mb-2">4.8</div>
                    <div class="text-white/80">Rating</div>
                </div>
                <div class="text-center text-white">
                    <div class="text-5xl font-bold mb-2">24/7</div>
                    <div class="text-white/80">Support</div>
                </div>
            </div>
        </div>
    </section>

    ---

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Belanja di Platform <span
                        class="gradient-text">Favorit</span></h2>
                <p class="text-gray-600 text-lg">Produk kami tersedia di berbagai marketplace terpercaya</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <a href="https://shopee.co.id" target="_blank"
                    class="bg-gradient-to-br from-orange-500 to-red-500 rounded-3xl p-8 text-white hover:shadow-2xl transition hover-scale">
                    <i class="fab fa-shopify text-6xl mb-4"></i>
                    <h3 class="text-2xl font-bold mb-2">Shopee</h3>
                    <p class="text-white/90">Belanja mudah dengan promo menarik</p>
                </a>

                <a href="https://tokopedia.com" target="_blank"
                    class="bg-gradient-to-br from-green-500 to-emerald-600 rounded-3xl p-8 text-white hover:shadow-2xl transition hover-scale">
                    <i class="fas fa-shopping-cart text-6xl mb-4"></i>
                    <h3 class="text-2xl font-bold mb-2">Tokopedia</h3>
                    <p class="text-white/90">Marketplace terpercaya Indonesia</p>
                </a>

                <a href="https://lazada.co.id" target="_blank"
                    class="bg-gradient-to-br from-amber-500 to-orange-600 rounded-3xl p-8 text-white hover:shadow-2xl transition hover-scale">
                    <i class="fas fa-store text-6xl mb-4"></i>
                    <h3 class="text-2xl font-bold mb-2">Lazada</h3>
                    <p class="text-white/90">Harga terbaik, pengiriman cepat</p>
                </a>
            </div>
        </div>
    </section>

    ---

    <section class="gradient-bg2 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-5xl font-bold text-white mb-4">Koleksi Produk Kami</h1>
            <p class="text-xl text-white/90">Temukan produk berkualitas untuk kebutuhan Anda</p>
        </div>
    </section>

    <section class="bg-white shadow-md sticky top-20 z-40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <form method="GET" action="{{ route('home') }}" class="flex flex-col md:flex-row gap-4">
                <div class="flex-1">
                    <div class="relative">
                        <input type="text" name="search" value="{{ request('search') }}"
                            placeholder="Cari produk..."
                            class="w-full px-4 py-3 pl-12 rounded-xl border-2 border-gray-200 focus:border-amber-500 focus:outline-none">
                        <i class="fas fa-search absolute left-4 top-4 text-gray-400"></i>
                    </div>
                </div>

                <button type="submit"
                    class="gradient-bg text-white px-8 py-3 rounded-xl font-semibold hover:opacity-90 transition">
                    <i class="fas fa-filter mr-2"></i>Filter
                </button>

                @if (request('search'))
                    <a href="{{ route('home') }}"
                        class="bg-gray-200 text-gray-700 px-8 py-3 rounded-xl font-semibold hover:bg-gray-300 transition">
                        <i class="fas fa-times mr-2"></i>Reset
                    </a>
                @endif
            </form>
        </div>
    </section>

    <section class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if ($products->count() > 0)
                <div class="mb-8 flex justify-between items-center">
                    <p class="text-gray-600">
                        Menampilkan <span class="font-semibold">{{ $products->firstItem() }}</span> -
                        <span class="font-semibold">{{ $products->lastItem() }}</span> dari
                        <span class="font-semibold">{{ $products->total() }}</span> produk
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-8">
                    @foreach ($products as $product)
                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition group">
                            <div class="relative overflow-hidden aspect-square">
                                @if (str_starts_with($product->image, 'http'))
                                    <img src="{{ $product->image }}" alt="{{ $product->name }}"
                                        class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                                @else
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                        class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                                @endif
                                {{-- Kategori: Jika digunakan, ubah warna badge menjadi amber-600 --}}
                                {{-- <div class="absolute top-4 right-4 bg-amber-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                            {{ $product->category->name }}
                        </div> --}}
                            </div>

                            <div class="p-6">
                                <h3
                                    class="font-bold text-lg text-gray-800 mb-2 line-clamp-2 group-hover:text-amber-600 transition">
                                    {{ $product->name }}
                                </h3>
                                <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                                    {{ $product->description }}
                                </p>
                                <div class="flex items-center justify-between mb-4">
                                    <div class="text-2xl font-bold gradient-text">
                                        Rp {{ number_format($product->price, 0, ',', '.') }}
                                    </div>
                                    <div class="flex items-center text-gray-500 text-sm">
                                        <i class="fas fa-eye mr-1"></i>
                                        <span>{{ $product->clicks }}</span>
                                    </div>
                                </div>

                                <div class="flex items-center">
                                    <a href="whatsapp" target="_blank" onclick="trackProductClick({{ $product->id }})"
                                        class="w-4/6 bg-green-600 text-white text-center py-3 rounded-lg transition text-base font-semibold hover:bg-green-700">
                                        <i class="fa-brands fa-whatsapp mr-1 text-lg"></i> Pesan Sekarang
                                    </a>

                                    <div class="w-2/6 flex justify-start items-center">
                                        @if ($product->shopee_link)
                                            <a href="{{ $product->shopee_link }}" target="_blank"
                                                onclick="trackProductClick({{ $product->id }})"
                                                class="transition py-3 flex items-center">
                                                <div
                                                    class="inline-flex justify-center items-center p-0 rounded-md transition duration-300 ease-in-out 
                                                hover:bg-orange-500 transform hover:scale-110">
                                                    <img src="{{ url('assets/pras/icons8-shopee-48.png') }}"
                                                        class="logo-ecommerce w-11 h-11" alt="Shopee Logo">
                                                </div>
                                            </a>
                                        @endif

                                        @if ($product->tokopedia_link)
                                            <a href="{{ $product->tokopedia_link }}" target="_blank"
                                                onclick="trackProductClick({{ $product->id }})"
                                                class="transition py-3 flex items-center">
                                                <div
                                                    class="inline-flex justify-center items-center p-0 rounded-md transition duration-300 ease-in-out 
                                                hover:bg-green-400 transform hover:scale-110">
                                                    <img src="{{ url('assets/pras/icons8-tokopedia-64.png') }}"
                                                        class="logo-ecommerce w-11 h-11" alt="Tokopedia Logo">
                                                </div>
                                            </a>
                                        @endif

                                        @if ($product->lazada_link)
                                            <a href="{{ $product->lazada_link }}" target="_blank"
                                                onclick="trackProductClick({{ $product->id }})"
                                                class="transition py-3 flex items-center">
                                                <div
                                                    class="inline-flex justify-center items-center p-0 rounded-md transition duration-300 ease-in-out 
                                                hover:bg-blue-500 transform hover:scale-110">
                                                    <img src="{{ url('assets/pras/icons8-lazada-100.png') }}"
                                                        class="logo-ecommerce w-11 h-11" alt="Lazada Logo">
                                                </div>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="mt-12">
                    {{ $products->links() }}
                </div>
            @else
                <div class="text-center py-20">
                    <div class="mb-6">
                        <i class="fas fa-box-open text-gray-300 text-8xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Produk Tidak Ditemukan</h3>
                    <p class="text-gray-600 mb-6">Coba ubah kata kunci pencarian Anda</p>
                    <a href="{{ route('products') }}"
                        class="inline-block gradient-bg text-white px-8 py-3 rounded-xl font-semibold hover:opacity-90 transition">
                        Lihat Semua Produk
                    </a>
                </div>
            @endif
        </div>
    </section>

    ---

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Lokasi <span class="gradient-text">Kami</span></h2>
                <p class="text-gray-600 text-lg">Kunjungi toko kami atau hubungi untuk informasi lebih lanjut</p>
            </div>

            <div class="bg-white rounded-3xl shadow-xl overflow-hidden">
                <div class="aspect-w-16 aspect-h-9">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.6449891641756!2d112.73803931477452!3d-7.282015094704644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f96cf8f8d6cf%3A0x7b2b63c8e9e13e58!2sSurabaya%2C%20Jawa%20Timur!5e0!3m2!1sen!2sid!4v1234567890123!5m2!1sen!2sid"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        class="w-full">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    ---

    <section class="py-20 gradient-bg">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Siap Berbelanja Produk Berkualitas?
            </h2>
            <p class="text-xl text-white/90 mb-8">
                Jelajahi koleksi lengkap produk kami dan temukan favorit Anda
            </p>
            <a href="{{ route('products') }}"
                class="inline-block bg-white text-amber-600 px-10 py-4 rounded-full font-semibold hover:bg-gray-100 transition hover-scale shadow-2xl">
                <i class="fas fa-arrow-right mr-2"></i>Lihat Semua Produk
            </a>
        </div>
    </section>
@endsection
