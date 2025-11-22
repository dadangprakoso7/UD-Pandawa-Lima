@extends('layouts.admin')

@section('title', 'Dashboard Admin')
@section('page-title', 'Dashboard')

@section('content')
<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <!-- Total Products -->
    <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl p-6 text-white shadow-lg">
        <div class="flex items-center justify-between mb-4">
            <div class="bg-white/20 p-3 rounded-lg">
                <i class="fas fa-box text-2xl"></i>
            </div>
            <i class="fas fa-arrow-up text-sm"></i>
        </div>
        <h3 class="text-3xl font-bold mb-1">{{ $totalProducts }}</h3>
        <p class="text-white/80 text-sm">Total Produk</p>
    </div>

    <!-- Total Visitors -->
    <div class="bg-gradient-to-br from-green-500 to-green-600 rounded-2xl p-6 text-white shadow-lg">
        <div class="flex items-center justify-between mb-4">
            <div class="bg-white/20 p-3 rounded-lg">
                <i class="fas fa-users text-2xl"></i>
            </div>
            <i class="fas fa-arrow-up text-sm"></i>
        </div>
        <h3 class="text-3xl font-bold mb-1">{{ $totalVisitors }}</h3>
        <p class="text-white/80 text-sm">Total Pengunjung</p>
    </div>

    <!-- Total Clicks -->
    <div class="bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl p-6 text-white shadow-lg">
        <div class="flex items-center justify-between mb-4">
            <div class="bg-white/20 p-3 rounded-lg">
                <i class="fas fa-mouse-pointer text-2xl"></i>
            </div>
            <i class="fas fa-arrow-up text-sm"></i>
        </div>
        <h3 class="text-3xl font-bold mb-1">{{ $totalClicks }}</h3>
        <p class="text-white/80 text-sm">Total Klik Produk</p>
    </div>

    <!-- Average Clicks -->
    <div class="bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl p-6 text-white shadow-lg">
        <div class="flex items-center justify-between mb-4">
            <div class="bg-white/20 p-3 rounded-lg">
                <i class="fas fa-chart-line text-2xl"></i>
            </div>
            <i class="fas fa-arrow-up text-sm"></i>
        </div>
        <h3 class="text-3xl font-bold mb-1">{{ $totalProducts > 0 ? round($totalClicks / $totalProducts, 1) : 0 }}</h3>
        <p class="text-white/80 text-sm">Rata-rata Klik/Produk</p>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <!-- Top Products - Virtual Scroll -->
    <div class="bg-white rounded-2xl shadow-lg p-4" id="top-products">
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-lg font-bold text-gray-800">
                <i class="fas fa-trophy text-yellow-500 mr-2"></i>
                Produk Terpopuler
            </h2>
        </div>

        <div class="space-y-2 max-h-96 overflow-y-auto" id="products-list">
            @forelse($topProducts as $product)
            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition"
                 data-product-id="{{ $product->id }}">
                <div class="flex items-center space-x-3 min-w-0 flex-1">
                    <div class="bg-gradient-to-br from-purple-500 to-blue-500 text-white w-8 h-8 rounded-lg flex items-center justify-center font-bold text-sm flex-shrink-0">
                        {{ $loop->iteration }}
                    </div>
                    <div class="min-w-0 flex-1">
                        <h3 class="font-semibold text-gray-800 truncate" title="{{ $product->name }}">
                            {{ \Illuminate\Support\Str::limit($product->name, 40) }}
                        </h3>
                    </div>
                </div>
                <div class="text-right flex-shrink-0 ml-2">
                    <p class="font-bold text-purple-600 text-sm">{{ $product->clicks }}</p>
                    <p class="text-xs text-gray-500">klik</p>
                </div>
            </div>
            @empty
            <div class="text-center py-8 text-gray-400">
                <i class="fas fa-box-open text-3xl mb-2"></i>
                <p class="text-sm">Belum ada data</p>
            </div>
            @endforelse
        </div>
    </div>

    <!-- Visitors Chart -->
    <div class="bg-white rounded-2xl shadow-lg p-4">
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-lg font-bold text-gray-800">
                <i class="fas fa-chart-area text-blue-500 mr-2"></i>
                Pengunjung (7 Hari)
            </h2>
        </div>
        <div class="h-64">
            <canvas id="visitorsChart" height="256"></canvas>
        </div>
    </div>
</div>

<!-- Recent Activity -->
<div class="bg-white rounded-2xl shadow-lg p-6 mt-6">
    <h2 class="text-xl font-bold text-gray-800 mb-6">
        <i class="fas fa-clock text-green-500 mr-2"></i>
        Ringkasan Aktivitas
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="flex items-center space-x-4 p-4 bg-blue-50 rounded-xl">
            <div class="bg-blue-500 text-white p-4 rounded-lg">
                <i class="fas fa-shopping-cart text-2xl"></i>
            </div>
            <div>
                <p class="text-sm text-gray-600">Produk Aktif</p>
                <p class="text-2xl font-bold text-gray-800">{{ $totalProducts }}</p>
            </div>
        </div>

        <div class="flex items-center space-x-4 p-4 bg-green-50 rounded-xl">
            <div class="bg-green-500 text-white p-4 rounded-lg">
                <i class="fas fa-eye text-2xl"></i>
            </div>
            <div>
                <p class="text-sm text-gray-600">View Hari Ini</p>
                <p class="text-2xl font-bold text-gray-800">{{ $visitorsChart->where('date', today()->format('Y-m-d'))->first()->count ?? 0 }}</p>
            </div>
        </div>

        <div class="flex items-center space-x-4 p-4 bg-purple-50 rounded-xl">
            <div class="bg-purple-500 text-white p-4 rounded-lg">
                <i class="fas fa-mouse-pointer text-2xl"></i>
            </div>
            <div>
                <p class="text-sm text-gray-600">Engagement Rate</p>
                <p class="text-2xl font-bold text-gray-800">
                    {{ $totalVisitors > 0 ? round(($totalClicks / $totalVisitors) * 100, 1) : 0 }}%
                </p>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('visitorsChart').getContext('2d');
    
    const chartData = @json($visitorsChart);
    const labels = chartData.map(item => {
        const date = new Date(item.date);
        return date.toLocaleDateString('id-ID', { day: 'numeric', month: 'short' });
    });
    const data = chartData.map(item => item.count);

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Pengunjung',
                data: data,
                borderColor: 'rgb(102, 126, 234)',
                backgroundColor: 'rgba(102, 126, 234, 0.1)',
                tension: 0.4,
                fill: true,
                pointBackgroundColor: 'rgb(102, 126, 234)',
                pointBorderColor: '#fff',
                pointBorderWidth: 2,
                pointRadius: 5,
                pointHoverRadius: 7
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    backgroundColor: 'rgba(0, 0, 0, 0.8)',
                    padding: 12,
                    titleColor: '#fff',
                    bodyColor: '#fff',
                    borderColor: 'rgb(102, 126, 234)',
                    borderWidth: 1
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        precision: 0
                    },
                    grid: {
                        color: 'rgba(0, 0, 0, 0.05)'
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            }
        }
    });
});
</script>
@endpush