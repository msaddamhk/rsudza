@extends('layout.maindetail')

@section('body')
    <div class="container" style="margin-top:120px;min-height:100vh">
        <div class="card p-5">
            <div class="row">
                <div class="col-md-6 mb-1">
                    <a href="{{ asset('storage/public/produk/' . $barang->gambar) }}">
                        <img src="{{ asset('storage/public/produk/' . $barang->gambar) }}" class="img-fluid "
                            alt="Responsive image" style="width: 600px; height:280px; border-radius:5px">
                    </a>
                </div>
                <div class="col-md-6" style="margin-top: px">
                    <h1 class="" style="font-size: 18px"> {{ $barang->judul }}</h1>
                    <h4><b>Harga : Rp.{{ number_format($barang->harga) }}</b></h4>
                    <h4 style="font-size: 18px">Stok : {{ $barang->stock }}</h4>
                    <hr>
                    <p><b>Deskripsi</b></p>
                    <p> {!! $barang->deskripsi !!}</p>
                    <!-- <hr /> -->
                    <form action="{{ url('/pesanan', $barang->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="jumlahpesanan">Jumlah Pesanan</label>
                            <input type="number" max="{{ $barang->stock }}" name="jumlahpesanan" class="form-control"
                                id="jumlahpesanan" placeholder="" required>
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-4 col-lg-6 mb-2">
                                <button class="btn  my-1 my-sm-0 text-white btn-block"
                                    style="background-color: #ff1100;font-size:14px;" type="submit">Tambahkan
                                    Kekeranjang</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
<!-- akcard -->
