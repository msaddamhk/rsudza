@extends('layout.admin.main')

@section('body')
    <div class="container " style="margin-top: 80px">
        <h5 style="font-weight: 700">Detail Pesanan</h5>
        <hr>
        {{-- @foreach ($pesanan as $item) --}}
        <div class="card p-5 mt-4">
            {{-- <p>Nama Penerima : {{ $item->nama_penerima }}</p>
                <p>No Telepon : {{ $item->notlp }}</p> --}}
            <table class="table">
                <thead>
                    <tr>
                        <th scope="" class="border-0">
                            <div class="text-uppercase">No</div>
                        </th>
                        <th scope="" class="border-0">
                            <div class="text-uppercase">Nama Barang</div>
                        </th>
                        <th scope=" " class="border-0">
                            <div class="text-uppercase">jumlah</div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($pesanan->items as $barang)
                        <tr>
                            <th scope="row">{{ $i }}</th>
                            <td scope="row">{{ $barang->barang->judul }}</td>
                            <td>{{ $barang->jumlah }}</td>
                        </tr>
                        @php
                            $i++;
                        @endphp
                    @endforeach
                </tbody>
            </table>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <h6 style="color: #275062; font-weight:800">Alamat</h6>
                    <p> {{ $pesanan->alamat }} </p>

                </div>
                <div class="col-md-4">
                    <h6 style="color: #275062; font-weight:800">Pengiriman</h6>
                    <h6 style="font-weight: bold">Kurir : {{ $pesanan->kurir }}</h6>
                    <h6 style="font-weight: bold">Opsi Pengiriman : {{ $pesanan->opsipengiriman }}</h6>
                    <h6 style="font-weight: bold">Estimasi Pengiriman : {{ $pesanan->etd }} Hari</h6>

                    <h6 style="color: #000000; font-weight:800">Opsi Pembayaran</h6>
                    <p> {{ $pesanan->pembayaran }} </p>
                </div>
                <div class="col-md-5">
                    <h6>Status Pembayaran : <b>{{ $pesanan->transaction_status }}</b></h6>
                    <h6 style="font-weight: 800">Total Ongkir :
                        Rp.{{ number_format($pesanan->total_ongkir) }} | Harga Barang :
                        Rp.{{ number_format($pesanan->total_harga) }}</h6>
                    <h6 style="color: #275062; font-weight:800">Total Harga Rp.
                        {{ number_format($pesanan->total_ongkir + $pesanan->total_harga) }}</h6>
                    <hr>
                    @if ($pesanan->pembayaran == 'COD')
                        <h6 style="color: #000000; font-weight:800">Pilihan</h6>
                        <p> {{ $pesanan->pilihan }} </p>
                        <h6 style="color: #000000; font-weight:800">Uang Pecahan</h6>
                        <p> Rp.{{ number_format($pesanan->pecahan) }} </p>
                        <h6 style="color: #000000; font-weight:800">Total Kembalian</h6>
                        <p>Rp. {{ number_format($pesanan->total_ongkir + $pesanan->total_harga - $pesanan->pecahan) }}</p>
                    @endif

                </div>
            </div>

            <div class="row p-3">
                {{-- <form action="{{ route('hapuspesanan', $pesanans) }}" method="POST" class="">
                        @csrf
                        @method('DELETE') --}}
                {{-- <a class="btn text-white ml-auto" style="background-color: #03912d;"
                        href=" https://api.whatsapp.com/send?phone=6285760557702&text=Hai Admin Saya Ingin Menanyakan Informasi barang saya, dengan kode Pesanan {{ $item->pesanan_id }}">Hubungi
                        Admin
                    </a> --}}
                {{-- <button class="btn btn-danger " type="submit">Hapus</button> --}}
                </form>
            </div>
        </div>
        {{-- @endforeach --}}
    </div>
