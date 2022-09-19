<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class kelolakeuntungancontroller extends Controller
{
    public function index()
    {
        $transaksi = Pesanan::where('konfirmasi', 'SUDAH DI KONFIRMASI')->get();
        return view('admin.kelolakeuntungan', compact('transaksi'));
    }
}
