<?php

namespace App\Http\Controllers\admin;

use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class typeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Type::orderByDesc('created_at')->get();
        return view('dashboard.type.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $types = $request->validate([
            'nama' => 'required|string|unique:types'
        ]);


        $type = Type::create($types);

        if ($type) {
            return to_route('types.index')->with('success', 'Berhasil Menambah Data');
        } else {
            return to_route('types.index')->with('failed', 'Gagal Menambah Data');
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
    public function edit(Type $type)
    {
        return view('dashboard.type.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Type $type)
    {
        $types = $request->validate([
            'nama' => 'required|string|unique:types,nama,' . $type->id
        ]);


        $type->update($types);

        if ($type) {
            return to_route('types.index')->with('success', 'Berhasil Mengedit Data');
        } else {
            return to_route('types.index')->with('failed', 'Gagal Mengedit Data');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        $type->delete();

        if ($type) {
            return to_route('types.index')->with('success', 'Berhasil Menghapus Data');
        } else {
            return to_route('types.index')->with('failed', 'Gagal Menghapus Data');
        }
    }
}
