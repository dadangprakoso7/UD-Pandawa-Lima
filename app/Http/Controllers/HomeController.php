<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use App\Models\Product;
use App\Models\ProductClick;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function index(Request $request)
    // {
    //     // Track visitor
    //     Visitor::create([
    //         'ip_address' => $request->ip(),
    //         'user_agent' => $request->userAgent(),
    //         'page_visited' => 'home',
    //         'visited_at' => now()
    //     ]);

    //     return view('home');
    // }

    public function index(Request $request)
    {
        // Track visitor
        Visitor::create([
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'page_visited' => 'home',
            'visited_at' => now()
        ]);

        $query = Product::query();
        // Search
        if ($request->has('search') && $request->search != '') {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        $products = $query->latest()->paginate(9);
        return view('PRAS', compact('products'));
    }
}