<?php

namespace App\Http\Controllers;

use App\Models\perpustakaan;
use Illuminate\Http\Request;

class PerpustakaanController extends Controller
{
    public function index() {
    return response()->json([
        'success' => true,
        'data' => perpustakaan::all()
    ]);
}

    public function show($id) {
        return response()->json(perpustakaan::findOrFail($id));
    }

    public function store(Request $request) {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'no_telpon' => 'required',
            'tipe' => 'required|in:Swasta,Negeri',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);
        $perpustakaan = perpustakaan::create($request->all());
        return response()->json([
    'success' => true,
    'data' => $perpustakaan
], 201); // <- status 201 Created
    }
    

    public function update(Request $request, $id) {
        $perpustakaan = perpustakaan::findOrFail($id);
        $perpustakaan->update($request->all());
        return response()->json(['success' => true, 'data' => $perpustakaan]);
    }

    public function destroy($id) {
        perpustakaan::findOrFail($id)->delete();
        return response()->json(['success' => true, 'message' => 'perpustakaan deleted']);
    }
}

