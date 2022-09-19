@extends('layout.admin.mainutama')

@section('body')
    <!-- navbar -->

    <div class="container mb-5" style="margin-top:60px">
        <h5 style="font-size: 24px;  font-weight: 700;">Kelola Data Keuangan</h5>
        <hr>
        <div class="row">

            <table class="table p-3 " hidden>
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Pesanan</th>
                        <th scope="col">Tanggal Pesanan</th>
                        <th scope="col">Pemasukan</th>
                        <th scope="col">Keuntungan</th>
                        <th scope="col">Konfirmasi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @php $totalkeuntungan = 0 @endphp
                    @php $totalpemasukan = 0 @endphp
                    @foreach ($transaksi as $item)
                        <tr>
                            <th scope="row">{{ $i }}</th>
                            <td>{{ $item->kodepesanan }}</td>
                            <td>{{ $item->created_at->diffForhumans() }}</td>
                            <td class=" ">
                                Rp. {{ number_format($item->total_ongkir + $item->total_harga) }}</td>
                            <td class=" ">
                                Rp. {{ number_format($item->totalkeuntungan) }}</td>
                            <td>
                                @if ($item->konfirmasi == 'SUDAH DI KONFIRMASI')
                                    <P class="bg-success text-center text-white p-1 rounded-1" style="font-size: 14px">
                                        {{ $item->konfirmasi }}</P>
                                @else
                                    <P class="bg-danger text-center text-white p-1 rounded-1" style="font-size: 14px">
                                        {{ $item->konfirmasi }}</P>
                                @endif
                            </td>
                        </tr>
                        @php $totalpemasukan +=  $item->total_ongkir + $item->total_harga  @endphp
                        @php $totalkeuntungan +=  $item->totalkeuntungan  @endphp
                        @php
                            $i++;
                        @endphp
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body text-justify">
                        <h1 style="font-size: 20px">Total Pesanan</h1>
                        <p class="card-title text-muted">{{ $transaksi->count() }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body text-justify">
                        <h1 style="font-size: 20px">Total Pemasukan</h1>
                        <p class="card-title text-muted">Rp. {{ number_format($totalpemasukan) }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body text-justify">
                        <h1 style="font-size: 20px">Total Keuntungan</h1>
                        <p class="card-title text-muted">Rp. {{ number_format($totalkeuntungan) }}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
