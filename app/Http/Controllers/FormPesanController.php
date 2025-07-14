<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;

class FormPesanController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'email' => 'required|email',
            'brand' => 'required|string',
            'telepon' => 'required|string',
            'produk' => 'required|string',
            'link' => 'nullable|url',
            'paket' => 'required|string',
        ]);

        Pesanan::create($request->all());

        return back()->with('success', 'Pesanan berhasil dikirim!');
    }
}