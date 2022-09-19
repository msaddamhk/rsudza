@extends('layout.maindetail')
@section('body')
    <!-- kategori -->
    <section id="kategori" class="kategori-produk p-3" style="min-height: 100vh">
        <div class="container mb-5" style="margin-top: 100px">
            <h5 class="" style="font-size: 22px;"> Kategori Produk</h5>
            <hr>
            <div class="row  mt-4 ">
                @foreach ($kategoris as $item)
                    {{-- @if ($item->barangs->count() != 0) --}}
                    <div class="col-6 col-md-4 col-lg-3 mb-3 " data-aos-delay="100">
                        <a href="{{ route('kategori.tampil', $item->slug) }}">
                            <div class="product"
                                style="background-image: url('{{ asset('storage/public/produk/kategori/' . $item->gambar) }}');">
                                <div class="product-content ">{{ $item->nama }}</div>
                            </div>
                        </a>
                    </div>
                    {{-- @endif --}}
                @endforeach
            </div>
        </div>
    </section>
    <!-- ak kategori -->
@endsection
