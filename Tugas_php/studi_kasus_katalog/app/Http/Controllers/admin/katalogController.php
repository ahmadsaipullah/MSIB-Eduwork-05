<?php

namespace App\Http\Controllers\admin;

use App\Models\katalog;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class katalogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $katalogs = katalog::orderByDesc('created_at')->get();
        return view('dashboard.katalog.index', compact('katalogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.katalog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $katalogs = $request->validate([
            'nama' => 'required|string|unique:katalogs'
        ]);


        $katalog = katalog::create($katalogs);

        if ($katalog) {
            return to_route('katalogs.index')->with('success', 'Berhasil Menambah Data');
        } else {
            return to_route('katalogs.index')->with('failed', 'Gagal Menambah Data');
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
    public function edit(katalog $katalog)
    {
        return view('dashboard.katalog.edit', compact('katalog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, katalog $katalog)
    {
        $katalogs = $request->validate([
            'nama' => 'required|string|unique:katalogs,nama,' . $katalog->id
        ]);


        $katalog->update($katalogs);

        if ($katalog) {
            return to_route('katalogs.index')->with('success', 'Berhasil Mengedit Data');
        } else {
            return to_route('katalogs.index')->with('failed', 'Gagal Mengedit Data');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(katalog $katalog)
    {
        $katalog->delete();

        if ($katalog) {
            return to_route('katalogs.index')->with('success', 'Berhasil Menghapus Data');
        } else {
            return to_route('katalogs.index')->with('failed', 'Gagal Menghapus Data');
        }
    }
}
