<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\kategori;
use App\Models\barang;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use PhpParser\Node\Stmt\Echo_;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoris = kategori::paginate(8);
        return view('admin.adminkategori', compact('kategoris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambahdatakategori');
    }

    public function tampilkategori($kategori)
    {
        $kategori = kategori::where('slug', $kategori)->get()->first();
        return view('kategori', compact('kategori'));
    }
    public function store(Request $request)
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:4048',
        ]);
        $model = new kategori;
        $model->nama = $request->nama;
        $model->slug = Str::slug($request->nama);
        if ($request->hasFile('gambar')) {
            $resorce = $request->file('gambar');
            $name = time() . $resorce->getClientOriginalName();
            $resorce->storeAs('public/produk/kategori/', $name);
        }
        $model->gambar = $name;
        $model->save();

        // return redirect('/admin');

        return redirect('/kategori')->with('success', 'data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(kategori $model)
    {
        return view('admin.updatedatakategori', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(kategori $model, Request $request)
    {

        if ($request->hasFile('gambar')) {
            $resorce = $request->file('gambar');
            $name = time() . $resorce->getClientOriginalName();
            $resorce->storeAs('public/produk/kategori/', $name);
        }
        $model->update([
            'nama' => $request->nama,
            'slug' => Str::slug($request->nama),
            'gambar' => $name,
        ]);
        // return $request;
        return redirect('/kategori')->with('success', 'data berhasil di tambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(kategori $model)
    {
        $model->delete($model->id);
        return redirect('/kategori')->with('success', 'data berhasil dihapus');
    }
}
