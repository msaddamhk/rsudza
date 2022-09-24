<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\kategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FacadesFile;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('admin');
        $barangs = barang::paginate(8);
        return view('admin.Kelolabarang', compact('barangs'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = kategori::all();
        return view('admin.tambahdata', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'harga' => 'required',
            'berat' => 'required',
            'stock' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:4048',
            'deskripsi' => 'required',
        ]);
        if ($request->hasFile('gambar')) {
            $resorce = $request->file('gambar');
            $name = time() . $resorce->getClientOriginalName();
            $resorce->storeAs('public/produk', $name);
        }
        barang::create([
            'kategori_id' => $request->kategori_id,
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'harga' => $request->harga,
            'berat' => $request->berat,
            'stock' => $request->stock,
            'gambar' => $name,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(barang $barangs)
    {
        $kategori = kategori::all();
        return view('admin.updatedata', compact('barangs', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, barang $barangs)
    {

        // if ($request->hasFile('gambar')) {
        //     $resorce = $request->file('gambar');
        //     $name = time() . $resorce->getClientOriginalName();
        //     $resorce->storeAs('public/produk', $name);
        // }
        if ($request->hasFile('gambar')) {
            FacadesFile::delete('public/produk', $barangs->name);
            $resorce = $request->file('gambar');
            $name = time() . $resorce->getClientOriginalName();
            $resorce->storeAs('public/produk', $name);
        }
        $barangs->update([
            'kategori_id' => $request->kategori_id,
            'judul' => $request->judul,
            'harga' => $request->harga,
            'berat' => $request->berat,
            'stock' => $request->stock,
            'tanggal' => $request->tanggal,
            'gambar' => $name ?? $barangs->gambar,
            'deskripsi' => $request->deskripsi,
        ]);


        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(barang $barangs)
    {
        $barangs->delete($barangs->id);
        return redirect('/admin')->with('success', 'data berhasil dihapus');
    }
}
