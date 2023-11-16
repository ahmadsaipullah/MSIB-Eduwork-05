<?php

namespace App\Http\Controllers\admin;

use App\Models\Suplier;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class suplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supliers = Suplier::orderByDesc('created_at')->get();
        return view('dashboard.suplier.index', compact('supliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.suplier.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $supliers = $request->validate([
            'perusahaan' => 'required|string|unique:supliers',
            'email' => 'required|string|email:dns|unique:supliers',
            'telp' => 'required|string|min:10|max:13',
            'alamat' => 'required|string',
            'negara' => 'required|string'
        ]);


        $suplier = Suplier::create($supliers);

        if ($suplier) {
            return to_route('supliers.index')->with('success', 'Berhasil Menambah Data');
        } else {
            return to_route('supliers.index')->with('failed', 'Gagal Menambah Data');
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
    public function edit(Suplier $suplier)
    {
        return view('dashboard.suplier.edit', compact('suplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Suplier $suplier)
    {
        $supliers = $request->validate([
            'perusahaan' => 'required|string|unique:supliers,perusahaan,' . $suplier->id,
            'email' => 'required|string|email:dns|unique:supliers,email,' . $suplier->id,
            'telp' => 'required|string|min:10|max:13',
            'alamat' => 'required|string',
            'negara' => 'required|string'
        ]);


        $suplier->update($supliers);

        if ($suplier) {
            return to_route('supliers.index')->with('success', 'Berhasil Mengedit Data');
        } else {
            return to_route('supliers.index')->with('failed', 'Gagal Mengedit Data');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Suplier $suplier)
    {
        $suplier->delete();

        if ($suplier) {
            return to_route('supliers.index')->with('success', 'Berhasil Menghapus Data');
        } else {
            return to_route('supliers.index')->with('failed', 'Gagal Menghapus Data');
        }
    }
}
