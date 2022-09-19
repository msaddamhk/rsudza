@extends('layout.admin.main')


@section('body')
    <div class="container">
        <form action="{{ url('updatetransaksi/' . $transaksi->id) }}" method="POST" class="p-4"
            enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <div class="form-group ">
                {{-- <label for="nama">Nama barang</label> --}}

                <select class="mb-2 form-control" name="transaksi" id="transaksi" required>
                    <option value="{{ $transaksi->transaction_status }}">{{ $transaksi->transaction_status }}
                    </option>
                    <option value="">-------------------------------------------------</option>
                    <option value="PENDING">PENDING</option>
                    <option>PEMBAYARAN BERHASIL | BARANG SEDANG DIKEMAS</option>
                </select>
            </div>
            <div class="pt-1 mb-4">
                <button class="btn btn-block" style="background-color: #275062; color: rgb(221, 221, 221);"
                    type="submit">Masuk
                    Sekarang</button>
            </div>
        </form>



    </div>


    </div>
@endsection
