<?php

namespace App\Http\Controllers\admin;

use App\Models\Type;
use App\Models\Brand;
use App\Models\katalog;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class dashboardController extends Controller
{
    public function index()
    {
        $katalog = katalog::count();
        $type = Type::count();
        $brand = Brand::count();
        $product = Product::count();
        return view('dashboard.dashboard', compact('katalog', 'type', 'brand', 'product'));
    }
}
