<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('pages.home', compact('products'));
    }

    public function detail_product($id)
    {
        $product = Product::findOrFail($id);
        return view('pages.detail_product', compact('product'));
    }

    public function men()
    {
        $products = Product::where('jenis', 'like', 'Men')->get();
        return view('pages.men', compact('products'));
    }

    public function women()
    {
        $products = Product::where('jenis', 'like', 'women')->get();
        return view('pages.women', compact('products'));
    }
}
