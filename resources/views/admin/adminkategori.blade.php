@extends('layout.admin.mainutama')

@section('body')
    <!-- navbar -->
    <section class="kategori-produk" style="margin-top:60px">
        <div class="container">


            <div class="row">

                <div class="col-md-6">
                    <h5 style="font-size: 28px; font-weight: 700;">Kelola Kategori</h5>
                </div>
                <div class="col-md-6">
                    <form>
                        <a href="{{ url('/kategori/create') }}" type="button" class="btn text-white mt-2 mb-4 "
                            style="background-color: #ff0000;">
                            + Tambahkan Kategori
                        </a>
                    </form>
                </div>
            </div>



            <table class="table mt-3">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($kategoris as $kategori)
                        <tr>
                            <th scope="row">{{ $i }}</th>
                            <td> {{ $kategori->nama }}</td>

                            <td>
                                <button class="btn btn-secondary dropdown-toggle btn-dark " type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    Pilihan
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item"
                                            href="{{ route('kategori.edit', $kategori->id) }}">Update</a></li>
                                    <li><a class="dropdown-item" href="hapuskategori/{{ $kategori->id }}">Delete</a></li>

                                </ul>
                            </td>
                        </tr>
                        @php
                            $i++;
                        @endphp
                    @endforeach
                </tbody>
            </table>
            {{-- <div class="row  mt-4 ">


                @foreach ($kategoris as $kategori)
                    <div class="col-6 col-md-4 col-lg-3 mb-4 " data-aos="fade-up" data-aos-delay="100">
                        <a href="" class="komponen-produk d-block">
                            <div class="produk">
                                <div class="foto-produk"
                                    style="background-image: url('{{ asset('storage/produk/kategori/' . $kategori->gambar) }}');">
                                    <div class="text-produk2 text-danger">
                                        {{ $kategori->nama }}
                                    </div>
                                </div>

                            </div>
                            <a href="{{ route('kategori.edit', $kategori->id) }}"
                                class="text-produk1 btn btn-info text-white mr-2 btn-sm">
                                Update data
                            </a>
                            <a href="hapuskategori/{{ $kategori->id }}"
                                class="text-produk1 text-white btn btn-danger btn-sm">
                                Hapus Data
                            </a>

                        </a>
                    </div>
                @endforeach
                <style>
                    .text-produk2 {

                        padding: 10px;
                        left: 0;
                        bottom: 0;
                        width: 100%;
                        color: white;
                    }
                </style>
                 end row 
            </div> --}}
            <div class="container">
                <div class="" data-aos="fade-up"> {{ $kategoris->links() }}</div>
            </div>

    </section>
    <!-- ak kategori -->
@endsection
