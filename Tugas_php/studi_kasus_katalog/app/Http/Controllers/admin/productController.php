<?php

namespace App\Http\Controllers\admin;

use App\Models\Type;
use App\Models\Brand;
use App\Models\katalog;
use App\Models\Product;
use App\Models\Suplier;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('Brand')->orderByDesc('created_at')->get();
        return view('dashboard.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands = Brand::get();
        $types = Type::get();
        $supliers = Suplier::get();
        $katalogs = katalog::get();
        return view('dashboard.product.create', compact('brands', 'types', 'supliers', 'katalogs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|string|unique:products',
            'nama_barang' => 'required|string|unique:products',
            'brand_id' => 'required|string',
            'type_id' => 'required|string',
            'katalog_id' => 'required|string',
            'suplier_id' => 'required|string',
            'size' => 'required|string',
            'jenis' => 'required|string',
            'qty_stock' => 'required|string',
            'harga' => 'required|string',
            'deskripsi' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $products = $request->all();
        $products['image'] = $request->file('image')->store('asset/product', 'public');

        Product::create($products);

        if ($products) {
            return to_route('products.index')->with('success', 'Berhasil Menambah Data');
        } else {
            return to_route('products.index')->with('failed', 'Gagal Menambah Data');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($product)
    {
        $brands = Brand::get();
        $types = Type::get();
        $supliers = Suplier::get();
        $katalogs = katalog::get();
        $product = Product::with(['Brand', 'Type', 'Suplier', 'katalog'])->findOrFail($product);
        return view('dashboard.product.edit', compact('product', 'brands', 'types', 'supliers', 'katalogs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $dataId = $product->find($product->id);
        $data = $request->all();
        if ($request->image) {
            Storage::delete('public/' . $dataId->image);
            $data['image'] = $request->file('image')->store('asset/product', 'public');
        }

        $dataId->update($data);

        if ($dataId) {
            return to_route('products.index')->with('success', 'Berhasil Mengupdate Data');
        } else {
            return to_route('products.index')->with('failed', 'Gagal Mengupdate Data');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        Storage::delete('public/' . $product->image);
        $product->delete();

        if ($product) {
            return to_route('products.index')->with('success', 'Berhasil Menghapus Data');
        } else {
            return to_route('products.index')->with('failed', 'Gagal Menghapus Data');
        }
    }
}
