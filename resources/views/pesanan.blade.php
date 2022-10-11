@extends('layout.maindetail')

@section('body')
    <section style="min-height:91vh">

        <div class="container" style="margin-top: 120px;">
            <div class="row">
                <div class="col-md-6">
                    <div class="container card p-4 mb-4">
                        <h5 class=""><b>Pesanan Anda</b> </h5>
                        <hr>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" class="border-0">Nama Barang</th>
                                    <th scope="col" class="border-0 ">Harga barang</th>
                                    <th scope="col" class=" border-0">Jumlah</th>
                                    <th scope="col" class="border-0 ">Total sub Harga</th>
                                    <th scope="col" class="border-0 " hidden>Biaya Produksi</th>
                                    <th scope="col" class="border-0 " hidden>Total Keuntungan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $totalkeuntungan = 0 @endphp
                                @php $totalharga = 0 @endphp
                                @foreach ($keranjang as $keranjangs)
                                    <tr>
                                        <th scope="row" class=" ">{{ $keranjangs->barang->judul }}</th>
                                        <td class=" ">
                                            Rp. {{ number_format($keranjangs->barang->harga) }}</td>
                                        <td class=" ">{{ $keranjangs->jumblah }}</td>
                                        <td class=" ">
                                            Rp. {{ number_format($keranjangs->getTotalHarga()) }}</td>
                                        <td class=" " hidden>
                                            Rp. {{ number_format($keranjangs->barang->berat) }} </td>
                                        <td class=" " hidden> Rp.
                                            {{ number_format($keranjangs->barang->harga * $keranjangs->jumblah - $keranjangs->barang->berat * $keranjangs->jumblah) }}
                                        </td>
                                    </tr>
                                    @php $totalharga +=  $keranjangs->getTotalHarga()  @endphp
                                    @php $totalkeuntungan +=  $keranjangs->barang->harga * $keranjangs->jumblah - $keranjangs->barang->berat * $keranjangs->jumblah  @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- detail -->
                    <div class="container card p-4 mb-5">
                        <h5 class=""><b>Data Anda</b> </h5>
                        <hr />
                        <form action="{{ route('pesan1') }}" method="post">
                            @csrf
                            <input type="hidden" class="form-control" name="harga" id="harga"
                                value="{{ $totalharga }}">
                            <input type="hidden" class="form-control" name="keuntungan" id="keuntungan"
                                value="{{ $totalkeuntungan }}">
                            <div class="form-group">
                                <label for="alamat">Nama</label>
                                <input type="text" value="{{ auth('')->user()->name }}" class="mb-2 form-control"
                                    name="nama" id="nama" aria-describedby="emailHelp" required>
                                <p style="font-size: 13px" for="alamat">Silahkan ubah Nama jika penerima berbeda</p>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="alamat">Detail Alamat</label>
                                    <input type="text" class="form-control" name="alamat" id="alamat"
                                        aria-describedby="emailHelp" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="deskripsi">Deskripsi Pesanan</label>
                                    <input type="text" name="deskripsi" class="form-control" id="deskripsi"
                                        aria-describedby="emailHelp" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="notelepon">No Telepon</label>
                                <input type="number" class="form-control" name="notelepon" id="notelepon"
                                    aria-describedby="emailHelp" required>
                            </div>
                            <div class="row container">
                                <div class="form-check col-md-6">
                                    <input onclick="document.getElementById('x').style.display = 'block'"
                                        class="form-check-input" type="radio" name="pembayaran" id="pembayaran"
                                        value="COD" required>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Bayar Secara langsung
                                    </label>
                                </div>
                                <div class="form-check col-md-6">
                                    <input class="form-check-input"
                                        onclick="document.getElementById('x').style.display = 'none'" type="radio"
                                        name="pembayaran" id="exampleRadios1" value="Online" required>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Bayar Secara Online
                                    </label>
                                </div>
                            </div>

                            <div class="form-group mt-3" id="x" style="display: none">
                                <label for="">Pilih</label>

                                <select id="test" class="form-control" name="pilihan"
                                    onchange="showDiv('hidden_div', this)">
                                    <option value="0 , Uang Pas" selected>Uang Pas</option>
                                    <option value="1, Butuh Uang Kembalian">Butuh Uang kembalian</option>
                                </select>

                                <div class="form-group mt-3" id="hidden_div">
                                    <label for="deskripsi">Masukan pecahan</label>
                                    <input type="text" name="pecahan" class="form-control" id="deskripsi"
                                        aria-describedby="emailHelp">
                                </div>
                            </div>
                            <style>
                                #hidden_div {
                                    display: none;
                                }
                            </style>
                            <script>
                                function showDiv(divId, element) {
                                    document.getElementById(divId).style.display = element.value == "1, Butuh Uang Kembalian" ? 'block' : 'none';
                                }
                            </script>

                            <hr class="mt-4" />
                            <p style="color: #000000">
                                Total Harga Barang : Rp. {{ number_format($totalharga) }} + Rp. 5000 Ongkos Kirim
                            </p>
                            <p class="mb-4"><b>Total Harga : Rp. {{ number_format($totalharga + 5000) }} </b></p>
                            <button type="submit" class="btn text-white"
                                style="background-color: #fd0000; margin-top: -5px">
                                Bayar Sekarang
                            </button>
                        </form>
                        <style>
                            .form-control {
                                background-color: #f3f3f3;
                            }
                        </style>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
