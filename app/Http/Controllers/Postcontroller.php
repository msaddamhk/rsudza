<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\kategori;
use Illuminate\Http\Request;
use Illuminate\support\Facedes\DB;

class Postcontroller extends Controller
{
    public function index()
    {
        $barangs = barang::latest();
        $kategoris = kategori::paginate(4);
        $bar = $barangs->limit(8)->get();

        $title = "Beranda";
        return view('index',  compact('bar', 'title', 'kategoris'));
        // return view('index', compact('bar', 'kategoris'));
    }
    public function tampilproduk()
    {
        $barangs = barang::latest()
            ->where('judul', 'like', '%' . (request('search') ?? '') . '%')
            ->get();
        return view('produk', compact('barangs'));
    }
    public function tampilkategori()
    {
        $kategoris = kategori::paginate(8);
        return view('detailkategori', compact('kategoris'));
    }
    public function cari()
    {
        dd(request('search'));
    }
}
