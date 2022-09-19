@extends('layout.admin.mainutama')

@section('body')
    <!-- navbar -->

    <div class="container mb-5" style="margin-top:60px">

        <div class="row">

            <div class="col-md-6">
                <h5 style="font-size: 28px; font-weight: 700;">Kelola Produk</h5>
            </div>
            <div class="col-md-6">
                <form>
                    <a href="{{ url('/admin/create') }}" type="button" class="btn text-white mt-2 mb-4 "
                        style="background-color: #ff0000;">
                        + Tambahkan Produk
                    </a>
                </form>
            </div>
        </div>
        {{-- <h5 style="font-size: 28px; color: #275062; font-weight: 700;">Kelola Produk</h5> --}}

        <hr>
        <div class="row">

            <table class="table ">
                <thead>
                    <tr>
                        <th scope="col border">No</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($barangs as $barang)
                        <tr>
                            <th scope="row"> {{ $i }}</th>
                            <td>{{ $barang->judul }}</td>
                            <td>{{ $barang->harga }}</td>
                            <td>
                                <button class="btn btn-secondary dropdown-toggle btn-dark " type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    Pilihan
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item"
                                            href="{{ route('barangs.edit', $barang->id) }}">Update</a></li>
                                    <li><a class="dropdown-item" href="hapus/{{ $barang->id }}">Delete</a></li>

                                </ul>
                            </td>
                        </tr>
                        @php
                            $i++;
                        @endphp
                    @endforeach
                </tbody>
            </table>




            {{-- <div class="container">
                <div class="" data-aos="fade-up"> {{ $barangs->links() }}</div>
            </div> --}}

            <style>
                .komponen-produk {
                    margin-bottom: 20px;
                }

                .foto-produk {
                    width: 100%;
                    height: 150px;
                    border-radius: 8px;
                    background-size: cover;
                }

                .text-produk {
                    font-size: 14px;
                    margin-top: 12px;
                    color: black;
                }

                .text-produk1 {
                    font-weight: 600;
                    font-size: 14px;
                    color: #275062;
                }

                .komponen-produk:hover {
                    text-decoration: none;
                }

                trix-toolbar [data-trix-button-group="file-tools"] {
                    display: none;
                }
            </style>


        </div>
    </div>



    {{-- </div> --}}
@endsection
