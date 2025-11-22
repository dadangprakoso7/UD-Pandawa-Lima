@extends('layouts.admin')

@section('title', 'Tambah Produk')
@section('page-title', 'Tambah Produk Baru')

@section('content')
<div class="max-w-4xl">
    <div class="bg-white rounded-2xl shadow-lg p-8">
        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Nama Produk -->
                <div class="md:col-span-2">
                    <label for="name" class="block text-gray-700 font-semibold mb-2">
                        Nama Produk <span class="text-red-500">*</span>
                    </label>
                    <input type="text" 
                           id="name" 
                           name="name" 
                           value="{{ old('name') }}"
                           required
                           class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-purple-500 focus:outline-none @error('name') border-red-500 @enderror"
                           placeholder="Contoh: Kue Nastar Premium">
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Harga -->
                <div>
                    <label for="price" class="block text-gray-700 font-semibold mb-2">
                        Harga (Rp) <span class="text-red-500">*</span>
                    </label>
                    <input type="number" 
                           id="price" 
                           name="price" 
                           value="{{ old('price') }}"
                           required
                           min="0"
                           step="0.01"
                           class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-purple-500 focus:outline-none @error('price') border-red-500 @enderror"
                           placeholder="75000">
                    @error('price')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Deskripsi -->
                <div class="md:col-span-2">
                    <label for="description" class="block text-gray-700 font-semibold mb-2">
                        Deskripsi <span class="text-red-500">*</span>
                    </label>
                    <textarea id="description" 
                              name="description" 
                              required
                              rows="4"
                              class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-purple-500 focus:outline-none @error('description') border-red-500 @enderror"
                              placeholder="Deskripsikan produk Anda...">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Gambar Produk -->
                <div class="md:col-span-2">
                    <label for="image" class="block text-gray-700 font-semibold mb-2">
                        Gambar Produk <span class="text-red-500">*</span>
                    </label>
                    <div class="border-2 border-dashed border-gray-300 rounded-xl p-6 text-center hover:border-purple-500 transition">
                        <input type="file" 
                               id="image" 
                               name="image" 
                               accept="image/*"
                               required
                               onchange="previewImage(event)"
                               class="hidden">
                        <label for="image" class="cursor-pointer">
                            <div id="image-preview" class="mb-4">
                                <i class="fas fa-cloud-upload-alt text-5xl text-gray-400"></i>
                            </div>
                            <p class="text-gray-600 mb-1">Klik untuk upload gambar</p>
                            <p class="text-sm text-gray-400">JPG, PNG, atau GIF (Max: 2MB)</p>
                        </label>
                    </div>
                    @error('image')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- E-commerce Links -->
                <div class="md:col-span-2">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Link E-commerce (Opsional)</h3>
                </div>

                <!-- Shopee -->
                <div class="md:col-span-2">
                    <label for="shopee_link" class="block text-gray-700 font-semibold mb-2">
                        <i class="fab fa-shopify text-orange-500 mr-2"></i>Link Shopee
                    </label>
                    <input type="url" 
                           id="shopee_link" 
                           name="shopee_link" 
                           value="{{ old('shopee_link') }}"
                           class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-purple-500 focus:outline-none @error('shopee_link') border-red-500 @enderror"
                           placeholder="https://shopee.co.id/...">
                    @error('shopee_link')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Tokopedia -->
                <div class="md:col-span-2">
                    <label for="tokopedia_link" class="block text-gray-700 font-semibold mb-2">
                        <i class="fas fa-shopping-cart text-green-500 mr-2"></i>Link Tokopedia
                    </label>
                    <input type="url" 
                           id="tokopedia_link" 
                           name="tokopedia_link" 
                           value="{{ old('tokopedia_link') }}"
                           class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-purple-500 focus:outline-none @error('tokopedia_link') border-red-500 @enderror"
                           placeholder="https://tokopedia.com/...">
                    @error('tokopedia_link')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Lazada -->
                <div class="md:col-span-2">
                    <label for="lazada_link" class="block text-gray-700 font-semibold mb-2">
                        <i class="fas fa-store text-blue-500 mr-2"></i>Link Lazada
                    </label>
                    <input type="url" 
                           id="lazada_link" 
                           name="lazada_link" 
                           value="{{ old('lazada_link') }}"
                           class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-purple-500 focus:outline-none @error('lazada_link') border-red-500 @enderror"
                           placeholder="https://lazada.co.id/...">
                    @error('lazada_link')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex justify-end space-x-4 mt-8">
                <a href="{{ route('admin.products.index') }}" 
                   class="px-6 py-3 bg-gray-200 text-gray-700 rounded-xl font-semibold hover:bg-gray-300 transition">
                    <i class="fas fa-times mr-2"></i>Batal
                </a>
                <button type="submit" 
                        class="gradient-bg text-white px-6 py-3 rounded-xl font-semibold hover:opacity-90 transition">
                    <i class="fas fa-save mr-2"></i>Simpan Produk
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
function previewImage(event) {
    const preview = document.getElementById('image-preview');
    const file = event.target.files[0];
    
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.innerHTML = `<img src="${e.target.result}" class="max-h-48 mx-auto rounded-lg">`;
        }
        reader.readAsDataURL(file);
    }
}
</script>
@endpush