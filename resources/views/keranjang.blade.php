@extends('layout.mainpesanan')

@section('body')
    <div class="container " style="margin-top: 110px;min-height:94vh">

        <div class="table-responsive p-2">
            @if ($keranjang->count() == 0)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Keranjang Anda Masi Kosong, silahkan belanja <br>
                    <a href="/" class="btn btn-danger mt-2" style="font-size: 12px"> Kembali</a>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @else
                <table class="table">

                    <thead class="">
                        <tr class="text-white" style="background-color: black">
                            <th colspan="4" scope="col">Keranjang</th>
                        </tr>
                        <tr>
                            <th scope="col" class="border-0">
                                <div class="py-2 text-uppercase">Barang</div>
                            </th>
                            <th scope="col" class="border-0">
                                <div class="py-2 text-uppercase">Harga</div>
                            </th>
                            <th scope="col" class="border-0">
                                <div class="py-2 text-uppercase">Jumlah</div>
                            </th>

                            <th scope="col" class="border-0">
                                <div class="py-2 text-uppercase">Hapus</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        @php $totalharga = 0 @endphp
                        @foreach ($keranjang as $keranjangs)
                            <tr>
                                <th scope="row" class="border-0">
                                    <div class="">
                                        {{-- <img src="{{ asset('storage/produk/' . $keranjangs->barang->gambar) }}" alt=""
                                    width="70" class="img-fluid rounded shadow-sm"> --}}
                                        <div class="p-2 d-inline-block align-middle">
                                            <h5 class="mb-0"> <a href="#"
                                                    class="text-dark d-inline-block align-middle">{{ $keranjangs->barang->judul }}</a>
                                            </h5>
                                            {{-- <span
                                            class="text-muted font-weight-normal font-italic d-block">{{ $keranjangs->barang->kategori->nama }}</span> --}}
                                        </div>
                                    </div>
                                </th>
                                <td class="border-0 align-middle"><strong>Rp.
                                        {{ number_format($keranjangs->getTotalHarga()) }}</strong></td>
                                <td class="border-0 align-middle">
                                    <strong>{{ $keranjangs->jumblah }}</strong>
                                </td>

                                {{-- akhir --}}
                                <td class="border-0 align-middle">
                                    <form action="{{ route('hapuskeranjang', $keranjangs) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="text-white p-2"
                                            style="font-size: 12px;border-radius:4px ; background-color:#fc0101;;  border:none ">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @php $totalharga += $keranjangs->getTotalHarga() @endphp
                        @endforeach
                        {{-- @endif --}}
            @endif
            </tbody>
            </table>
            {{-- @if ($keranjang->count() == 0) --}}
            <a href="{{ route('pesan') }}" class="btn  my-2 my-sm-0 text-white" id="ongkir"
                style="background-color: #fc0101;" type="submit">Beli Sekarang
            </a>
            {{-- @endif --}}
        </div>
    </div>
@endsection
