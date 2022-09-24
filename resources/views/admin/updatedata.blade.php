@extends('layout.admin.main')


@section('body')
    <div class="container-fluid p-4">


        <form action="{{ url('/update/' . $barangs->id) }}" method="POST" class="p-4" enctype="multipart/form-data">
            @csrf

            <h4 style="color: #000000">
                <b>Update Produk</b>
            </h4>
            <hr>

            <input type="hidden" name="_method" value="PATCH">
            <div class="form-group ">
                <label for="judul">Nama barang</label>
                <input type="text" name="judul" class="form-control" id="judul" aria-describedby="emailHelp"
                    placeholder="" value="{{ $barangs->judul }}">

            </div>
            <label>Kategori</label>
            <select name="kategori_id" class="form-control" id="kategori_id">
                @foreach ($kategori as $item)
                    @if (old('kategori_id', $barangs->kategori_id) == $item->id)
                        <option value="{{ $item->id }}" selected>{{ $item->nama }} </option>
                    @else
                        <option value="{{ $item->id }} ">{{ $item->nama }} </option>
                    @endif
                    {{-- <option value="{{ $item->id }} ">{{ $item->nama }} </option> --}}
                @endforeach
            </select>

            <div class="form-group mt-3">
                <label for="berat">Harga Produksi</label>
                <input value="{{ $barangs->berat }}" type="number" name="berat" class="form-control" id="berat"
                    placeholder="Masukkan harga produksi" required>
            </div>

            <div class="form-group">
                <label for="harga">Harga</label>
                <input value="{{ $barangs->harga }}" type=" number" name="harga" class="form-control" id="harga"
                    placeholder="">
            </div>

            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="number" value="{{ $barangs->stock }}" name="stock" class="form-control" id="stock"
                    placeholder="">
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Deskripsi</label>
                <input value="{{ $barangs->deskripsi }}" id="x" type="hidden" name="deskripsi">
                <trix-editor input="x"></trix-editor>
            </div>

            {{-- <div class="form-group">
                <label for="deskripsi">deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" id="deskripsi" placeholder="">
            </div> --}}

            <div class="form-group">
                <label for="gambar">Tambahkan Foto</label>
                <input type="file" value="{{ $barangs->gambar }}" name="gambar" class="form-control-file "
                    id="gambar">
                <label for="gambar">Masukkan Foto dengan format JPG, PNG, JPEG | Max ukuran foto 4 MB</label>
            </div>

            <div class="">
                <button class="btn " style="background-color: #f30000; color: rgb(221, 221, 221);" type="submit">Update
                    Data</button>
            </div>
    </div>


    </form>
    </div>
@endsection
