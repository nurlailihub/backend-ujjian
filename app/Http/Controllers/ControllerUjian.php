<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modelujian;

class ControllerUjian extends Controller
{
    // GET /api/ujian
    public function index()
    {
        $data = Modelujian::all();

        return response()->json($data);
    }

    // POST /api/ujian
    public function store(Request $request)
    {
        $data = Modelujian::create([
            'nama' => $request->nama,
            'nim'  => $request->nim,
        ]);

        return response()->json([
            'message' => 'Data berhasil ditambahkan',
            'data' => $data
        ]);
    }
}
