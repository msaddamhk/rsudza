<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class KelolaTransaksiController extends Controller
{
    public function index()
    {
        $transaksi = Pesanan::all();
        return view('admin.keloladatatransaksi', compact('transaksi'));
    }
    public function edit(Pesanan $transaksi)
    {
        return view('admin.updatedatatransaksi', compact('transaksi'));
    }
    public function show(Pesanan $transaksi, $id)
    {
        $pesanan = Pesanan::find($id);
        return view('admin.showdatapesanan', compact('pesanan'));
    }
    public function update(request $request, Pesanan $transaksi)
    {
        $transaksi->update([
            'transaction_status' => $request->transaksi,
        ]);

        return redirect('/kelolapesanan');
    }

    public function konfirmasi($kode_pesanan)
    {
        $pesanan = Pesanan::where('kodepesanan', $kode_pesanan, 'barang')->with('items')->first();
        $pesanan->update([
            "konfirmasi" => 'SUDAH DI KONFIRMASI',
        ]);
        collect($pesanan->items)->each(function ($item) {
            $barang = barang::find($item->barang_id);
            $barang->update([
                'stock' => $barang->stock - $item->jumlah
            ]);
        });
        return redirect()->back();
    }
}
