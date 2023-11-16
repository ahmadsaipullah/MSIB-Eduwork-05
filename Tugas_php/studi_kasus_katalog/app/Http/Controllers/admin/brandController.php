<?php

namespace App\Http\Controllers\admin;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class brandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::orderByDesc('created_at')->get();
        return view('dashboard.brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $brands = $request->validate([
            'nama' => 'required|string|unique:brands'
        ]);


        $brand = Brand::create($brands);

        if ($brand) {
            return to_route('brands.index')->with('success', 'Berhasil Menambah Data');
        } else {
            return to_route('brands.index')->with('failed', 'Gagal Menambah Data');
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
    public function edit(Brand $brand)
    {
        return view('dashboard.brand.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        $brands = $request->validate([
            'nama' => 'required|string|unique:brands,nama,' . $brand->id
        ]);


        $brand->update($brands);

        if ($brand) {
            return to_route('brands.index')->with('success', 'Berhasil Mengedit Data');
        } else {
            return to_route('brands.index')->with('failed', 'Gagal Mengedit Data');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();

        if ($brand) {
            return to_route('brands.index')->with('success', 'Berhasil Menghapus Data');
        } else {
            return to_route('brands.index')->with('failed', 'Gagal Menghapus Data');
        }
    }
}
