@extends('layout.main')

@section('body')
    {{-- aplikasi --}}
    {{-- <div class="p-3"> --}}
    {{-- form --}}
    <div style="margin-top: 10px;" class="bg-dange d-block d-sm-none p-3">
        <div class="m-4 card"style="border-radius:11px">
            <div class=" p-3">
                <form action="{{ route('tampilproduk') }}" method="GET">
                    <div id="custom-search-input" class="">
                        <div class="input-group ">
                            <input class="form-control-borderless col input-lg p-2" placeholder="Silahkan cari Produk"
                                name="search" type="search" value="{{ request('search') }}" />
                            <span class="input-group-btn">
                                <div class="col-auto">
                                    <button class="btn btn-lg text-white" style="background-color: #e90000;"
                                        type="submit">Cari</button>
                                </div>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- ak form --}}
    {{-- versi android --}}

    <section class="m-3">
        <div class="d-block d-sm-none" style="margin-top: -26px;">
            <div class="jumbotron m-4  containerbaru jumbotron4">
                <div class="bungkus p-3">
                    <p class="judul7 ">
                        Selamat Datang <br>
                        di Website Koperasi Pegawai Negeri Sehat Sejahtera
                    </p>
                    {{-- <p class="judul8">
                        Kepuasan Anda adalah <b>Prioritas Kami</b>
                    </p> --}}
                    <div class=" mt-2 ">
                        <a class="btn bg1 text-white" href="#produk" role="button">Buka 09.00 WIB - 24.00 WIB</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .jumbotron4 {
            background-image: url(../foto/rsudza.jpeg);
            background-size: cover;
            position: relative;
            border-radius: 10px;
            height: 260px;

        }

        .jumbotron4::before {
            content: "";
            display: block;
            width: 100%;
            top: 0;
            right: 0;
            left: 0;
            border-radius: 10px;
            background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.3), #000000);
            position: absolute;
            bottom: 0;
        }

        .containerbaru {
            position: relative;
            z-index: 100;
        }

        .bungkus {
            position: relative;
            z-index: 1000;
        }

        .judul7 {
            font-weight: 500;
            font-size: 16px;
            margin-top: 40px;
            color: #ffffff;

        }

        .judul8 {
            font-size: 10px;
            margin-top: -11px
        }

        .bg1 {
            background-color: #e90000;
            font-size: 7px
        }

        @media screen and (max-width: 380px) {
            .judul7 {
                font-weight: 500;
                font-size: 17px;
                margin-top: 35px;

            }
        }

        @media screen and (max-width: 280px) {
            .judul7 {
                font-weight: 500;
                font-size: 16px;
                margin-top: 31px;
            }

            .judul8 {
                font-size: 8px;
                margin-top: -11px
            }
        }
    </style>
    </div>
    {{-- akhir android --}}

    <!-- jumbotron -->
    <div class=" jumbotron jmb2 jumbotron-fluid d-none d-sm-block d-md-none d-lg-block"
        style="background-image: url(foto/rsudza.jpeg)">
        <div class="container p-4 containergb2" style="margin-top: 115px;">
            <h1 style="color: #ffffff; font-size: 26px; font-weight: 500;   line-height: 40px;">
                Selamat Datang <br>
                di Website Koperasi Pegawai Negeri Sehat Sejahtera
            </h1>
            <div class="cari mt-3">
                <form action="{{ route('tampilproduk') }}" method="GET">
                    <div id="custom-search-input" class="">
                        <div class="input-group ">
                            <input class="form-control-borderless col input-lg p-2" placeholder="Silahkan cari Produk"
                                name="search" type="search" value="{{ request('search') }}" />
                            <span class="input-group-btn">
                                <div class="col-auto">
                                    <button class="btn btn-lg text-white" style="background-color: #e90000;"
                                        type="submit">Cari</button>
                                </div>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <p class="text-white" style="margin-top: 95px"> Buka 09.00 WIB - 24.00 WIB</p>
        </div>
    </div>
    <!-- jumbtron -->

    <!-- kategori -->
    <section id="kategori" class="kategori-produk p-4">
        <div class="container">
            <h5 class="" style="font-size: 22px;"> Kategori Produk</h5>
            <hr>
            <div class="row  mt-4 ">
                @foreach ($kategoris as $item)
                    {{-- @if ($item->barangs->count() != 0) --}}
                    <div class="col-md-3  mb-3 " data-aos-delay="100">
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
            <div class=" mt-2">
                <a href="/detailkategori" class="btn my-2 my-sm-0 melayang " type="submit"
                    style="background-color: #f72601; color: rgb(255, 255, 255);">Selanjutnya</a>
            </div>
        </div>
    </section>
    <!-- ak kategori -->

    <!-- Produk -->
    <section id="produk" class="produk mt-2 p-4 mb-5">
        <div class="container">
            <h5 class="" style="font-size: 22px;">Produk</h5>
            <hr>
            <div class="row mt-4">
                @foreach ($bar as $barang)
                    <div class="col-6 col-md-4 col-lg-3 mb-2">
                        <div class=" border  mb-3 melayang">
                            <a href="/detail/{{ $barang->id }}" style="   text-decoration: none;">
                                <div class="produk">
                                    <div class="foto-produk"
                                        style="background-image: url('{{ asset('storage/public/produk/' . $barang->gambar) }}');">
                                    </div>
                                </div>
                                <div class="p-3 text-justify">
                                    <h5 class="barang">{{ $barang->judul }}</h5>
                                    <p class="barang">Rp. {{ number_format($barang->harga) }}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="">
                <a href="/produk" class="btn my-2 my-sm-0 melayang " type="submit"
                    style="background-color: #f72601; color: rgb(255, 255, 255);">Selanjutnya</a>
            </div>
    </section>
    <!-- akhir Produk -->
@endsection
