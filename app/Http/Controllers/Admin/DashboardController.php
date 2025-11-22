<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Visitor;
use App\Models\ProductClick;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProducts = Product::count();
        $totalVisitors = Visitor::count();
        $totalClicks = ProductClick::count();
        
        // Top 5 most clicked products
        $topProducts = Product::orderBy('clicks', 'desc')->take(5)->get();
        
        // Visitors last 7 days
        $visitorsChart = Visitor::select(
            DB::raw('DATE(visited_at) as date'),
            DB::raw('COUNT(*) as count')
        )
        ->where('visited_at', '>=', now()->subDays(7))
        ->groupBy('date')
        ->orderBy('date')
        ->get();

        return view('admin.dashboard', compact(
            'totalProducts',
            'totalVisitors',
            'totalClicks',
            'topProducts',
            'visitorsChart'
        ));
    }
}