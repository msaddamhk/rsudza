@extends('layout.mainpesanan')

@section('body')
    <div class="container mb-5 p-5" style="margin-top: 70px">
        <h5 style="font-weight: 700">Data Pesanan</h5>
        <hr>
        @foreach ($datatransaksi as $item)
            <div class="  mt-4">
                <div class="row">
                    <div class="col-md-8">
                        <p>Nama Penerima : {{ $item->nama_penerima }}</p>
                        <p>Kode Pesanan : {{ $item->kodepesanan }}</p>
                    </div>
                </div>
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
                        @foreach ($item->items as $barang)
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
                    <div class="col-md-6">
                        <h6 style="color: #000000; font-weight:800">Alamat</h6>
                        <p> {{ $item->alamat }} </p>
                        <h6 style="color: #000000; font-weight:800">Opsi Pembayaran</h6>
                        <p> {{ $item->pembayaran }} </p>

                        @if ($item->pembayaran == 'COD')
                            <h6 style="color: #000000; font-weight:800">Pilihan</h6>
                            <p> {{ $item->pilihan }} </p>
                        @endif
                    </div>
                    {{-- <div class="col-md-4">
                        <h6 style="color: #275062; font-weight:800">Pengiriman</h6>
                        <h6 style="font-weight: bold">Kurir : {{ $item->kurir }}</h6>
                        <h6 style="font-weight: bold">Opsi Pengiriman : {{ $item->opsipengiriman }}</h6>
                        <h6 style="font-weight: bold">Estimasi Pengiriman : {{ $item->etd }} Hari</h6>
                    </div> --}}
                    <div class="col-md-6">
                        <h6>Status Pembayaran : <b>{{ $barang->pesanan->transaction_status }}</b></h6>
                        <h6 style="font-weight: 800">Total Ongkir :
                            Rp.{{ number_format($item->total_ongkir) }} | Harga Barang :
                            Rp.{{ number_format($item->total_harga) }}</h6>
                        <h6 style="color: #000000; font-weight:800">Total Harga Rp.
                            {{ number_format($item->total_ongkir + $item->total_harga) }}</h6>
                        {{-- <p>silahkan Cek Detail Pembayaran di Email anda : {{ auth('')->user()->name }}</p> --}}
                    </div>
                </div>

                <div class="row p-3">
                    <a class="btn text-white" style="background-color: #e90000;"
                        href=" https://api.whatsapp.com/send?phone=6285760557702&text=Hai Admin Saya Ingin Menanyakan Informasi barang saya, dengan kode Pesanan {{ $item->kodepesanan }}, atas nama {{ $item->nama_penerima }} ">Hubungi
                        Admin
                    </a>
                    </form>
                </div>
            </div>
            <hr>
        @endforeach
    </div>
