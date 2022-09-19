@extends('layout.admin.mainutama')

@section('body')
    <!-- navbar -->

    <div class="container mb-5" style="margin-top:60px">
        <h5 style="font-size: 24px;  font-weight: 700;">Kelola Data Transaksi</h5>
        <hr>
        <div class="row">
            <table class="table p-3 ">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kode Pesanan</th>
                        <th scope="col">Tanggal Pesanan</th>
                        <th scope="col">Status Pembayaran</th>
                        <th scope="col">Konfirmasi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($transaksi as $item)
                        <tr>
                            <th scope="row">{{ $i }}</th>
                            <td>{{ $item->nama_penerima }}</td>
                            <td>{{ $item->kodepesanan }}</td>
                            <td>{{ $item->created_at->diffForhumans() }}</td>
                            <td value="">{{ $item->transaction_status }}</td>
                            <td>
                                @if ($item->konfirmasi == 'SUDAH DI KONFIRMASI')
                                    <P class="bg-success text-center text-white p-1 rounded-1" style="font-size: 14px">
                                        {{ $item->konfirmasi }}</P>
                                @else
                                    <P class="bg-danger text-center text-white p-1 rounded-1" style="font-size: 14px">
                                        {{ $item->konfirmasi }}</P>
                                @endif
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn  dropdown-toggle btn-dark" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Aksi
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="{{ route('showpesanan', $item->id) }}">Detail</a>
                                        </li>
                                        <form action="{{ route('updatestok', $item->kodepesanan) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            @if ($item->konfirmasi == 'SUDAH DI KONFIRMASI')
                                                <button class="dropdown-item" href="#" disabled>Konfirmasi</button>
                                            @else
                                                <button class="dropdown-item" href="#">Konfirmasi</button>
                                            @endif
                                        </form>
                                        <li><a class="dropdown-item" href="{{ route('updatepesanan', $item->id) }}">Update
                                                Status Pembayaran</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        @php
                            $i++;
                        @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
