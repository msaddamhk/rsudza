@extends('layout.maindetail')
@section('body')
    <!-- card baru -->
    <section id="produk" class="produk p-4" style="">
        <div class="container" style="margin-top: 100px;min-height: 95vh">
            <div class="row">
                <div class="col-12">
                    <h5 style=" font-weight: 700;">
                        Produk Kami
                    </h5>
                </div>
            </div>
            <hr>
            <div class="row mt-4">
                @php $kategoriaos = 0 @endphp
                @foreach ($barangs as $barang)
                    <div class="col-6 col-md-4 col-lg-3 mb-4">
                        <div class=" border  mb-3 melayang">
                            <a href="/detail/{{ $barang->id }}" style="   text-decoration: none;">
                                <div class="produk">
                                    <div class="foto-produk"
                                        style="background-image: url('{{ asset('storage/public/produk/' . $barang->gambar) }}');">
                                    </div>
                                </div>
                                <div class="card-body text-justify">
                                    <h5 class="barang">{{ $barang->judul }}</h5>
                                    <p class="barang">{{ number_format($barang->harga) }}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- <div class="container">
            <div class="" data-aos="fade-up"> {{ $barangs->links() }}</div>
        </div> --}}

    </section>
    <!-- akhir card baru -->
@endsection
