@extends('layout.admin.main')


@section('body')
    <div class="container-fluid p-4">
        <form action="{{ url('/admin') }}" method="POST" class="p-4" enctype="multipart/form-data">
            @csrf

            <h4 style="color: #000000">
                <b>Tambah Produk</b>
            </h4>
            <hr>

            <div class="form-group ">
                <label for="judul">Nama barang</label>
                <input type="text" name="judul" class="form-control" id="judul" aria-describedby="emailHelp"
                    placeholder="Masukkan nama barang" required>
                {{-- <div class="valid-feedback">Example invalid feedback text</div> --}}
                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
            </div>

            <label>Kategori</label>
            <select class="mb-2 form-control" name="kategori_id" id="kategori_id" required>
                <option value="" selected disabled> Masukkan nama kategori </option>
                @foreach ($kategori as $item)
                    <option value="{{ $item->id }}">{{ $item->nama }} </option>
                @endforeach
            </select>

            <div class="form-group mt-3">
                <label for="berat">Harga Produksi</label>
                <input type="number" name="berat" class="form-control" id="berat"
                    placeholder="Masukkan harga produksi" required>
            </div>

            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" name="harga" class="form-control" id="harga" placeholder="Masukkan harga barang"
                    required>
            </div>



            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="number" name="stock" class="form-control" id="stock" placeholder="Masukkan stok barang"
                    required>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Deskripsi</label>
                <input id="x" type="hidden" name="deskripsi">
                <trix-editor input="x" placeholder="Masukkan deskripsi barang" required></trix-editor>
            </div>

            {{-- <div class="form-group">
                <label for="deskripsi">deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" id="deskripsi" placeholder="">
            </div> --}}

            <div class="form-group">
                <label for="gambar">Tambahkan Foto</label>
                <input type="file" name="gambar" class="form-control-file" id="gambar" required>
            </div>
            <label for="gambar">Masukkan Foto dengan format JPG, PNG, JPEG | Max ukuran foto 4 MB</label>

            <div class="pt-1 mb-4">
                <button class="btn " style="background-color: #f30000; color: rgb(221, 221, 221);" type="submit">Kirim
                    Data</button>
            </div>
    </div>



    </div>
@endsection
