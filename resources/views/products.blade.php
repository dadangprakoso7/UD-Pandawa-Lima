@extends('layouts.app')

@section('title', 'Produk - UMKM Makmur')

@section('content')
<section class="gradient-bg py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl font-bold text-white mb-4">Koleksi Produk Kami</h1>
        <p class="text-xl text-white/90">Temukan produk berkualitas untuk kebutuhan Anda</p>
    </div>
</section>

<section class="bg-white shadow-md sticky top-20 z-40">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <form method="GET" action="{{ route('products') }}" class="flex flex-col md:flex-row gap-4">
            <div class="flex-1">
                <div class="relative">
                    <input type="text" 
                           name="search" 
                           value="{{ request('search') }}"
                           placeholder="Cari produk..."
                           class="w-full px-4 py-3 pl-12 rounded-xl border-2 border-gray-200 focus:border-purple-500 focus:outline-none">
                    <i class="fas fa-search absolute left-4 top-4 text-gray-400"></i>
                </div>
            </div>

            <button type="submit" 
                    class="gradient-bg text-white px-8 py-3 rounded-xl font-semibold hover:opacity-90 transition">
                <i class="fas fa-filter mr-2"></i>Filter
            </button>

            @if(request('search')) {{-- Cek hanya untuk search --}}
                <a href="{{ route('products') }}" 
                   class="bg-gray-200 text-gray-700 px-8 py-3 rounded-xl font-semibold hover:bg-gray-300 transition">
                    <i class="fas fa-times mr-2"></i>Reset
                </a>
            @endif
        </form>
    </div>
</section>

<section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($products->count() > 0)
            <div class="mb-8 flex justify-between items-center">
                <p class="text-gray-600">
                    Menampilkan <span class="font-semibold">{{ $products->firstItem() }}</span> - 
                    <span class="font-semibold">{{ $products->lastItem() }}</span> dari 
                    <span class="font-semibold">{{ $products->total() }}</span> produk
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-8">
                @foreach($products as $product)
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition group">
                    <div class="relative overflow-hidden aspect-square">
                        @if(str_starts_with($product->image, 'http'))
                            <img src="{{ $product->image }}" 
                                 alt="{{ $product->name }}"
                                 class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        @else
                            <img src="{{ asset('storage/' . $product->image) }}" 
                                 alt="{{ $product->name }}"
                                 class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        @endif
                        {{-- Kategori di sini telah dihapus, jika Anda masih ingin menampilkannya, pastikan relasi 'category' tersedia pada model Product. --}}
                        {{-- Jika tidak, baris berikut harus dipertimbangkan untuk dihapus juga: --}}
                        {{-- <div class="absolute top-4 right-4 bg-purple-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                            {{ $product->category->name }}
                        </div> --}}
                        
                        {{-- CATATAN: Karena Anda menghapus kategori, baris di atas mungkin menimbulkan error jika relasi/data kategori tidak tersedia. Saya menyertakan komentar agar Anda bisa memutuskan apakah akan menghapusnya atau tidak. Untuk saat ini, saya **membiarkannya** karena Anda hanya meminta penghapusan elemen filter. --}}
                        
                    </div>

                    <div class="p-6">
                        <h3 class="font-bold text-lg text-gray-800 mb-2 line-clamp-2 group-hover:text-purple-600 transition">
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
                            <a href="whatsapp" 
                                target="_blank"
                                onclick="trackProductClick({{ $product->id }})"
                                class="w-3/6 bg-green-600 text-white text-center py-3 rounded-lg transition text-base font-semibold hover:bg-green-700">
                                <i class="fa-brands fa-whatsapp mr-1 text-lg"></i> Pesan Sekarang
                            </a>
                            
                            @if($product->shopee_link)
                            <a href="{{ $product->shopee_link }}" 
                                target="_blank"
                                onclick="trackProductClick({{ $product->id }})"
                                class="w-1/6 text-center py-3 transition">
                                
                                <div class="inline-flex justify-center items-center p-1 rounded-md transition duration-300 ease-in-out 
                                            hover:bg-orange-500 transform hover:scale-110">
                                    <img src="{{url("assets/pras/icons8-shopee-48.png")}}" class="logo-ecommerce w-8 h-8" alt="Shopee Logo">
                                </div>
                            </a>
                            @endif

                            @if($product->tokopedia_link)
                            <a href="{{ $product->tokopedia_link }}" 
                                target="_blank"
                                onclick="trackProductClick({{ $product->id }})"
                                class="w-1/6 text-center py-3 transition">
                                
                                <div class="inline-flex justify-center items-center p-1 rounded-md transition duration-300 ease-in-out 
                                            hover:bg-green-400 transform hover:scale-110">
                                    <img src="{{url("assets/pras/icons8-tokopedia-64.png")}}" class="logo-ecommerce w-8 h-8" alt="Tokopedia Logo">
                                </div>
                            </a>
                            @endif

                            @if($product->lazada_link)
                            <a href="{{ $product->lazada_link }}" 
                                target="_blank"
                                onclick="trackProductClick({{ $product->id }})"
                                class="w-1/6 text-center py-3 transition">
                                
                                <div class="inline-flex justify-center items-center p-1 rounded-md transition duration-300 ease-in-out 
                                            hover:bg-blue-500 transform hover:scale-110">
                                    <img src="{{url("assets/pras/icons8-lazada-100.png")}}" class="logo-ecommerce w-8 h-8" alt="Lazada Logo">
                                </div>
                            </a>
                            @endif
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
@endsection

@push('scripts')
<script>
function trackProductClick(productId) {
    fetch(`/products/${productId}/track-click`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            // Pastikan Anda memiliki tag <meta name="csrf-token" content="{{ csrf_token() }}"> di layout utama (layouts.app)
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        }
    });
}
</script>
@endpush