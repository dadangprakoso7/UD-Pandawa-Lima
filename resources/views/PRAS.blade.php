<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- ============================
        META TITLE & DESCRIPTION (SEO)
    ============================ -->
    <title>
        Kerupuk Tradisional Premium | UD. Pandawa Lima – Renyah & Gurih
    </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description"
        content="Kerupuk Puli, Abir, dan Plepet premium dengan rasa gurih dan renyah. Dibuat dari bahan pilihan tanpa pengawet. Pengiriman ke seluruh Indonesia. Temukan kerupuk tradisional terbaik dari UD. Pandawa Lima." />

    <!-- Canonical URL -->
    <link rel="canonical" href="https://yourdomain.com/" />

    <!-- Open Graph (Sharing SEO) -->
    <meta property="og:title" content="Kerupuk Tradisional Premium – UD. Pandawa Lima" />
    <meta property="og:description"
        content="Kerupuk premium dari bahan pilihan dengan pengiriman nasional. Puli, Abir, Plepet, dan berbagai kerupuk tradisional terbaik." />
    <meta property="og:image" content="{{ url('assets/pras/assets/hero-remove.png') }}" />
    <meta property="og:type" content="website" />

    <!-- Icon -->
    <link rel="shortcut icon" href="{{ url('assets/pras/assets/icon.jpeg') }}" type="image/x-icon" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{ url('assets/pras/style.css') }}" />


    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/6a1b256075.js" crossorigin="anonymous"></script>


</head>

<body>
    <nav class="navbar">
        <div class="navbar-container">
            <!-- Logo -->
            <div class="logo">
                <img src="{{ url('assets/pras/assets/logo.png') }}" alt="Kerupuk Pandawa Lima" />
            </div>

            <!-- Menu -->
            <ul class="nav-menu">
                <li class="nav-item"><a href="#hero" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                <li class="nav-item">
                    <a href="#products" class="nav-link">Products</a>
                </li>
                <li class="nav-item">
                    <a href="#legality" class="nav-link">Legality</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">Contact</a>
                </li>
                <li class="nav-item"></li>
                <a href="https://wa.me/6282320375807" target="_blank" class="whatsapp-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1219.547 1225.016">
                        <path fill="#E0E0E0"
                            d="M1041.858 178.02C927.206 63.289 774.753.07 612.325 0 277.617 0 5.232 272.298 5.098 606.991c-.039 106.986 27.915 211.42 81.048 303.476L0 1225.016l321.898-84.406c88.689 48.368 188.547 73.855 290.166 73.896h.258.003c334.654 0 607.08-272.346 607.222-607.023.056-162.208-63.052-314.724-177.689-429.463z" />
                        <linearGradient id="a" x1="609.77" x2="609.77" y1="1190.114" y2="21.084"
                            gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#20b038" />
                            <stop offset="1" stop-color="#60d66a" />
                        </linearGradient>
                        <path fill="url(#a)"
                            d="M27.875 1190.114l82.211-300.18c-50.719-87.852-77.391-187.523-77.359-289.602.133-319.398 260.078-579.25 579.469-579.25 155.016.07 300.508 60.398 409.898 169.891 109.414 109.492 169.633 255.031 169.57 409.812-.133 319.406-260.094 579.281-579.445 579.281h-.258c-96.977-.031-192.266-24.375-276.898-70.5l-307.188 80.548z" />
                        <path fill="#FFF" fill-rule="evenodd"
                            d="M462.273 349.294c-11.234-24.977-23.062-25.477-33.75-25.914-8.742-.375-18.75-.352-28.742-.352-10 0-26.25 3.758-39.992 18.766-13.75 15.008-52.5 51.289-52.5 125.078 0 73.797 53.75 145.102 61.242 155.117 7.5 10 103.758 166.266 256.203 226.383 126.695 49.961 152.477 40.023 179.977 37.523s88.734-36.273 101.234-71.297c12.5-35.016 12.5-65.031 8.75-71.305-3.75-6.25-13.75-10-28.75-17.5s-88.734-43.789-102.484-48.789-23.75-7.5-33.75 7.516c-10 15-38.727 48.773-47.477 58.773-8.75 10.023-17.5 11.273-32.5 3.773-15-7.523-63.305-23.344-120.609-74.438-44.586-39.75-74.688-88.844-83.438-103.859-8.75-15-.938-23.125 6.586-30.602 6.734-6.719 15-17.508 22.5-26.266 7.484-8.758 9.984-15.008 14.984-25.008 5-10.016 2.5-18.773-1.25-26.273s-32.898-81.67-46.234-111.326z"
                            clip-rule="evenodd" />
                    </svg>
                    <span>Order via WhatsApp</span>
                </a>
            </ul>

            <!-- Hamburger Button -->
            <button class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>
                    Kerupuk Tradisional Premium
                    <span class="heading">Dengan Rasa Otentik</span>
                </h1>
                <p>
                    Dibuat dari bahan pilihan dan resep asli yang menghasilkan kerupuk
                    renyah & gurih, siap dikirim ke seluruh Indonesia.
                </p>
                <div class="hero-buttons">
                    <a href="#products" class="btn-primary">Cicipi Kelezatan Aslinya</a>
                    <a href="https://wa.me/6282320375807" target="_blank" class="btn-outline">
                        <i class="fa-brands fa-whatsapp"></i>
                        Pesan Sekarang</a>
                </div>
            </div>
            <div class="hero-image">
                <img src="{{ url('assets/pras/assets/hero-remove.png') }}" alt="Kerupuk UD. Pandawa Lima" />
            </div>
        </div>
        <!-- Scroll Down Arrow -->
        <a href="#about" class="scroll-down">
            <i class="fa-solid fa-angles-down"></i>
        </a>
    </section>
    <!-- end Hero Section -->

    <!-- About Section -->
    <section class="about" id="about">
        <div class="about-container">
            <div class="about-image">
                <img src="{{ url('assets/pras/assets/unnamed (2).jpg') }}" alt="Rengginang Madura Aa Process" />
            </div>
            <div class="about-text">
                <h2>Tentang Kami</h2>
                <p>
                    UD. Pandawa Lima adalah produsen kerupuk tradisional premium yang
                    menghadirkan rasa otentik khas Nusantara. Dibuat dari bahan pilihan,
                    tanpa pengawet, dan diolah dengan proses higienis untuk memastikan
                    kualitas terbaik bagi seluruh pelanggan di Indonesia.
                </p>
                <p>
                    Nilai yang Kami Pegang: Bahan pilihan, tanpa kompromi Rasa otentik
                    dan konsisten, Proses higienis dan terpercaya, Dukungan pada UMKM
                    lokal
                </p>
            </div>
        </div>
    </section>

    <!-- ==============================
     Products Section
     ============================== -->
    <section id="products" class="products">
        <div class="products-container">
            <h2>Produk Kami</h2>
            <div class="product-grid" loading="lazy">
                <!-- Product 1 -->
                @forelse ($products as $product)
                    <div class="product-card">
                        @if (str_starts_with($product->image, 'http'))
                            <img src="{{ $product->image }}" alt="{{ $product->name }}">
                        @else
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                        @endif
                        <h3>{{ $product->name }}</h3>
                        <p>
                            {{ $product->description }}
                        </p>
                        <span class="price">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                        <div class="links-group">
                            <a href="https://wa.me/6282320375807?text=Halo%20saya%20ingin%20memesan%20Rengginang%20Bawang"
                                target="_blank" class="btn-whatsapp2"
                                onclick="trackProductClick({{ $product->id }})">
                                <i class="fa-brands fa-whatsapp"></i>
                                Pesan Sekarang
                            </a>

                            @if ($product->tokopedia_link)
                                <a href="{{ $product->tokopedia_link }}" target="_blank"
                                    onclick="trackProductClick({{ $product->id }})" class="btn-tokopedia">
                                    <img src="{{ url('assets/pras/icons8-tokopedia-64.png') }}"
                                        class="logo-ecommerce" alt="Tokopedia Logo">
                                </a>
                            @endif

                            @if ($product->shopee_link)
                                <a href="{{ $product->shopee_link }}" target="_blank"
                                    onclick="trackProductClick({{ $product->id }})" class="btn-shopee">
                                    <img src="{{ url('assets/pras/icons8-shopee-48.png') }}" class="logo-ecommerce"
                                        alt="Shopee Logo">
                                </a>
                            @endif

                            @if ($product->lazada_link)
                                <a href="{{ $product->lazada_link }}" target="_blank"
                                    onclick="trackProductClick({{ $product->id }})" class="btn-lazada">
                                    <img src="{{ url('assets/pras/icons8-lazada-100.png') }}" class="logo-ecommerce"
                                        alt="Lazada Logo">
                                </a>
                            @endif
                        </div>

                    </div>
                @empty
                @endforelse


            </div>
        </div>
    </section>

    <!-- ==============================
         Legality Section
         ============================== -->
    <section id="legality" class="legality">
        <div class="legality-grid">
            <div class="legality-card modern-card">
                <div class="legality-content">
                    <div class="legality-image fixed-img">
                        <img src="{{ url('assets/pras/assets/NIB.jpg') }}" alt="Legalitas NIB" />
                    </div>

                    <div class="legality-text">
                        <h2>Legalitas Usaha</h2>
                        <ul>
                            <li><strong>Nama Usaha:</strong> UD. Pandawa Lima</li>
                            <li><strong>Atas Nama:</strong> Imam Khusaeri</li>
                            <li><strong>NIB:</strong> 0103230004118</li>
                            <li>
                                <strong>Alamat:</strong> Dusun Jatilawang, Desa Tegalwangi,
                                Kecamatan Umbulsari Kabupaten Jember, Jawa Timur
                            </li>
                            <li><strong>Bentuk Usaha:</strong> Perorangan</li>
                        </ul>
                        <button class="open-modal-btn" data-img="assets/NIB.jpg">Lihat Gambar</button>
                    </div>
                </div>
            </div>

            <div class="legality-card modern-card">
                <div class="legality-content">
                    <div class="legality-image fixed-img">
                        <img src="{{ url('assets/pras/assets/Sertifikat_Halal.jpg') }}" alt="Sertifikat Halal" />
                    </div>

                    <div class="legality-text">
                        <h2>Sertifikasi Halal</h2>
                        <ul>
                            <li><strong>Nama Usaha:</strong> UD. Pandawa Lima</li>
                            <li><strong>Atas Nama:</strong> Imam Khusaeri</li>
                            <li><strong>ID Sertifikasi Halal:</strong> 35110006977840723</li>
                            <li>
                                <strong>Alamat:</strong> Dusun Jatilawang, Desa Tegalwangi,
                                Kecamatan Umbulsari Kabupaten Jember, Jawa Timur
                            </li>
                            <li><strong>Jenis Produk:</strong> Makanan Ringan Siap Santap</li>
                            <li><strong>Bidang Usaha:</strong> Produksi dan Penjualan Kerupuk</li>
                        </ul>
                        <button class="open-modal-btn" data-img="assets/Sertifikat_Halal.jpg">Lihat Gambar</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Image Preview Modal -->
    <div id="imgModal" class="img-modal">
        <span class="img-modal-close">&times;</span>
        <img class="img-modal-content" id="modalImage">
    </div>



    <!-- ==============================
         Contact Section
         ============================== -->
    <section id="contact" class="contact">
        <div class="contact-container">
            <div class="section-header">
                <span class="section-subtitle">Hubungi Kami</span>
                <h2>Kontak <span>& Lokasi</span></h2>
                <p>
                    Silakan hubungi kami untuk pemesanan, pertanyaan, atau kerja sama
                    bisnis.
                </p>
            </div>

            <div class="contact-content">
                <!-- Left: Contact Info -->
                <div class="contact-info">
                    <div class="info-card">
                        <div class="icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="text">
                            <h3>Alamat</h3>
                            <p>
                                Dusun Jatilawang, Desa Tegalwangi, <br />Kecamatan Umbulsari
                                Kab. Jember, Jawa Timur
                            </p>
                        </div>
                    </div>

                    <div class="info-card">
                        <div class="icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="text">
                            <h3>Telepon</h3>
                            <p>
                                <a href="https://wa.me/6282320375807" target="_blank">6282320375807 (Imam
                                    Khusairi)</a>
                            </p>
                        </div>
                    </div>

                    <div class="info-card">
                        <div class="icon">
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                        <div class="text">
                            <h3>Social Media</h3>
                            <a href="https://www.instagram.com/khus_aeri598?igsh=NXJtaW9rd2pmMDF3">UD.Pandawa
                                Lima(khus_aeri598)</a>
                        </div>
                    </div>
                </div>

                <!-- Right: Map -->
                <div class="contact-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3814.881987397508!2d113.4650101750099!3d-8.247210991786158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zOMKwMTQnNTAuMCJTIDExM8KwMjgnMDMuMyJF!5e1!3m2!1sen!2sid!4v1763434536375!5m2!1sen!2sid"
                        width="100%" height="350" style="border: 0" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-container">
            <!-- About Section -->
            <div class="footer-column">
                <h3>Tentang Kami</h3>
                <p>
                    UD. Pandawa Lima adalah produsen kerupuk tradisional premium yang
                    berkomitmen menghadirkan cita rasa otentik untuk seluruh pelanggan
                    di Indonesia.
                </p>
            </div>

            <!-- Quick Links -->
            <div class="footer-column">
                <h3>Tautan Cepat</h3>
                <ul>
                    <li><a href="#hero">Beranda</a></li>
                    <li><a href="#about">Tentang</a></li>
                    <li><a href="#products">Produk</a></li>
                    <li><a href="#legality">Legalitas</a></li>
                    <li><a href="#contact">Kontak</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="footer-column">
                <h3>Hubungi Kami</h3>
                <p><i class="fa-solid fa-phone"></i> 6282320375807 (Imam Khusairi)</p>
                <p>
                    <i class="fa-solid fa-location-dot"></i> Dusun Jatilawang, Desa
                    Tegalwangi, <br />Kecamatan Umbulsari Kab. Jember, Jawa Timur
                </p>
                <a href="https://maps.app.goo.gl/H3mXYca9MYH1JwYs9" target="_blank" class="footer-btn">Lihat di
                    Google Maps</a>
            </div>
        </div>

        <div class="footer-bottom">
            <a href="https://www.instagram.com/centerpoint_studio8?igsh=dm4yaDU0M2hzMHdp">© 2025 Centerpoints Studio.
                All Rights Reserved.</a>
        </div>
    </footer>

    <script src="{{ url('assets/pras/script.js') }}"></script>
</body>
@push('scripts')
    <script>
        function trackProductClick(productId) {
            fetch(`/products/${productId}/track-click`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',

                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                }
            });
        }
    </script>

    </html>
