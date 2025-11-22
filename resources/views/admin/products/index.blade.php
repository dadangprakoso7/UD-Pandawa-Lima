@extends('layouts.admin')

@section('title', 'Kelola Produk')
@section('page-title', 'Kelola Produk')

@section('content')
<div class="mb-6 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
    <div>
        <p class="text-gray-600">Kelola semua produk UMKM Anda</p>
    </div>
    <a href="{{ route('admin.products.create') }}" 
       class="gradient-bg text-white px-6 py-3 rounded-xl font-semibold hover:opacity-90 transition shadow-lg inline-flex items-center">
        <i class="fas fa-plus mr-2"></i>Tambah Produk
    </a>
</div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <form method="GET" action="{{ route('admin.products.index') }}" class="flex flex-col md:flex-row gap-4">
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
                <a href="{{ route('admin.products.index') }}" 
                   class="bg-gray-200 text-gray-700 px-8 py-3 rounded-xl font-semibold hover:bg-gray-300 transition">
                    <i class="fas fa-times mr-2"></i>Reset
                </a>
            @endif
        </form>
    </div>

<div class="bg-white rounded-2xl shadow-lg overflow-hidden">
    @if($products->count() > 0)
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Produk</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Kategori</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Harga</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Klik</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach($products as $product)
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-6 py-4">
                        <div class="flex items-center space-x-4">
                            @if(str_starts_with($product->image, 'http'))
                                <img src="{{ $product->image }}" 
                                     alt="{{ $product->name }}"
                                     class="w-16 h-16 rounded-lg object-cover">
                            @else
                                <img src="{{ asset('storage/' . $product->image) }}" 
                                     alt="{{ $product->name }}"
                                     class="w-16 h-16 rounded-lg object-cover">
                            @endif
                            <div>
                                <p class="font-semibold text-gray-800">{{ $product->name }}</p>
                                <p class="text-sm text-gray-500 line-clamp-1">{{ Str::limit($product->description, 50) }}</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        
                    </td>
                    <td class="px-6 py-4">
                        <p class="font-bold text-gray-800">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-eye text-gray-400"></i>
                            <span class="font-semibold text-gray-700">{{ $product->clicks }}</span>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center space-x-2">
                            <a href="{{ route('admin.products.edit', $product) }}" 
                               class="bg-blue-500 hover:bg-blue-600 text-white p-2 rounded-lg transition"
                               title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.products.destroy', $product) }}" 
                                  method="POST" 
                                  onsubmit="return confirm('Yakin ingin menghapus produk ini?');"
                                  class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="bg-red-500 hover:bg-red-600 text-white p-2 rounded-lg transition"
                                        title="Hapus">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="px-6 py-4 border-t border-gray-200">
        {{ $products->links() }}
    </div>
    @else
    <div class="text-center py-16">
        <i class="fas fa-box-open text-gray-300 text-6xl mb-4"></i>
        <h3 class="text-xl font-semibold text-gray-700 mb-2">Belum Ada Produk</h3>
        <p class="text-gray-500 mb-6">Mulai tambahkan produk pertama Anda</p>
        <a href="{{ route('admin.products.create') }}" 
           class="inline-block gradient-bg text-white px-6 py-3 rounded-xl font-semibold hover:opacity-90 transition">
            <i class="fas fa-plus mr-2"></i>Tambah Produk
        </a>
    </div>
    @endif
</div>
@endsection