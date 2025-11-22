<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductClick;
use App\Models\Visitor;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        // Track visitor
        Visitor::create([
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'page_visited' => 'products',
            'visited_at' => now()
        ]);
        $query = Product::query();
        // Search
        if ($request->has('search') && $request->search != '') {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        $products = $query->latest()->paginate(1);

        return view('products', compact('products'));
    }

    public function trackClick(Request $request, Product $product)
    {
        ProductClick::create([
            'product_id' => $product->id,
            'ip_address' => $request->ip(),
            'clicked_at' => now()
        ]);

        $product->increment('clicks');

        return response()->json(['success' => true]);
    }
}