<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fabcart</title>
    <style>
        body {
            background-color: #F6F6F6;
            margin: 0;
            padding: 0;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 0;
            padding: 0;
        }

        p {
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin-right: auto;
            margin-left: auto;
        }

        .brand-section {
            background-color: #0d1033;
            padding: 10px 40px;
        }

        .logo {
            width: 50%;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .col-6 {
            width: 50%;
            flex: 0 0 auto;
        }

        .text-white {
            color: #fff;
        }

        .company-details {
            float: right;
            text-align: right;
        }

        .body-section {
            padding: 16px;
            border: 1px solid gray;
        }

        .heading {
            font-size: 20px;
            margin-bottom: 08px;
        }

        .sub-heading {
            color: #262626;
            margin-bottom: 05px;
        }

        table {
            background-color: #fff;
            width: 100%;
            border-collapse: collapse;
        }

        table thead tr {
            border: 1px solid #111;
            background-color: #f2f2f2;
        }

        table td {
            vertical-align: middle !important;
            text-align: center;
        }

        table th,
        table td {
            padding-top: 08px;
            padding-bottom: 08px;
        }

        .table-bordered {
            box-shadow: 0px 0px 5px 0.5px gray;
        }

        .table-bordered td,
        .table-bordered th {
            border: 1px solid #dee2e6;
        }

        .text-right {
            text-align: end;
        }

        .w-20 {
            width: 20%;
        }

        .float-right {
            float: right;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="brand-section">
            <div class="row">
                <div class="col-6">
                    <h1 class="text-white">INVOICE</h1>
                </div>
                <div class="col-6">
                    {{-- <div class="company-details">
                        <p class="text-white">assdad asd asda asdad a sd</p>
                        <p class="text-white">assdad asd asd</p>
                        <p class="text-white">+91 888555XXXX</p>
                    </div> --}}
                </div>
            </div>
        </div>

        <div class="body-section">
            <div class="row">
                <div class="col-6">
                    <h2 class="heading">No Pesanan: {{ $data->kodepesanan }}</h2>
                    <p class="sub-heading">Nama : {{ $data->nama_penerima }}</p>
                    <p class="sub-heading">Tanggal Pesanan : {{ $data->created_at }}</p>
                    <p class="sub-heading">Opsi Pembayaran : {{ $data->pembayaran }}</p>
                </div>
                {{-- <div class="col-6">
                    <p class="sub-heading">Full Name: </p>
                    <p class="sub-heading">Address: </p>
                    <p class="sub-heading">Phone Number: </p>
                    <p class="sub-heading">City,State,Pincode: </p>
                </div> --}}
            </div>
        </div>

        <div class="body-section">
            <h3 class="heading">Daftar Pesanan</h3>
            <br>
            <table class="table-bordered">
                <thead>
                    <tr>
                        <th>Nama Produk</th>
                        <th class="w-20">Jumlah</th>
                        <th class="w-20">Harga Barang</th>
                        <th class="w-20">Total Harga</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data->items as $item)
                        <tr>
                            <td>{{ $item->barang->judul }}</td>
                            <td>{{ $item->jumlah }}</td>
                            <td>Rp. {{ number_format($item->barang->harga) }}</td>
                            <td>Rp. {{ number_format($item->barang->harga * $item->jumlah) }}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="3" class="text-right">Total Harga Barang</td>
                        <td>Rp. {{ number_format($data->total_harga) }} </td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right">Ongkir</td>
                        <td>Rp. {{ number_format($data->total_ongkir) }}</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right">Grand Total</td>
                        <td>Rp. {{ number_format($data->total_ongkir + $data->total_harga) }}</td>
                    </tr>
                    @if ($data->pembayaran == 'COD')
                        <tr>
                            <td colspan="3" class="text-right">Uang Cash</td>
                            <td> Rp.{{ number_format($data->pecahan) }} </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-right">Kembalian</td>
                            <td> Rp.
                                {{ number_format($data->total_ongkir + $data->total_harga - $data->pecahan) }}
                            </td>
                        </tr>
                    @endif
                </tbody>

            </table>
            <br>
            <h6>Status Pembayaran : {{ $data->transaction_status }}</h6>
        </div>

        <div class="body-section">
            <p>&copy; Copyright 2022 - Kantin RSUDZA
                {{-- <a href="https://www.fundaofwebit.com/" class="float-right">www.fundaofwebit.com</a> --}}
            </p>
        </div>
    </div>

</body>

</html>
