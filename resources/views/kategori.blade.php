@extends('layout.maindetail')
@section('body')
    <!-- card baru -->
    <section id="produk" class="produk p-3 " style="min-height: 95vh">
        <div class="container" style="margin-top: 120px">
            <div class="row">
                <div class="col-12">
                    <h5 style="font-size: 22px; color: #000000; font-weight: 700;">Kategori {{ $kategori->nama }}
                    </h5>
                </div>
            </div>

            <hr>
            <div class="row mt-4">
                @foreach ($kategori->barangs as $barang)
                    <div class="col-6 col-md-4 col-lg-3 mb-4">
                        <div class=" border-0  mb-3 melayang">
                            <a href="/detail/{{ $barang->id }}" style="text-decoration: none;">
                                <div class="produk">
                                    <div class="foto-produk"
                                        style="background-image: url('{{ asset('storage/public/produk/' . $barang->gambar) }}');">
                                    </div>
                                </div>
                                <div class="p-3 text-justify">
                                    <h5 class="barang">{{ $barang->judul }}</h5>
                                    <p class="barang">{{ number_format($barang->harga) }}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
                <!-- row -->
            </div>
        </div>
    </section>
    <!-- akhir card baru -->
@endsection
