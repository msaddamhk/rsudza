<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Keranjang;
use App\Models\pesanan;

class KeranjangController extends Controller
{
    public function index()
    {
        $keranjang = Keranjang::where('id_user', auth()->user()->id)->get();
        $title = "Keranjang";
        return view('keranjang', compact('keranjang', 'title'));
    }
    public function destroy(Keranjang $keranjang)
    {
        $keranjang->delete();
        return redirect('/keranjang')->with('success', 'data berhasil dihapus');
    }
}
