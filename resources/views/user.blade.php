@extends('layout.mainpesanan')

@section('body')
    {{-- mobile --}}
    <div class="container d-block d-sm-none d-none d-sm-block d-md-none p-3 mt-5" style="min-height:92vh">
        <div class="card p-4 mt-5">
            <div class="row">
                <div class="col-8">
                    <h6><b>Selamat Datang</b></h1>
                        <p> Hi,{{ auth('')->user()->name }}</p>
                </div>
                <div class="col-4">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="btn p-2 my-2 my-sm-0 text-white"
                            style="background-color: #6C5ECF; font-size: 11px" type="submit"><i
                                class="fas fa-sign-out-alt p-1"></i>Keluar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- desktop --}}
    {{-- <div class="container p-3 d-none d-md-block d-lg-nonex " style="margin-top: 120px">
        <div class="card p-4">
            <div class="row">
                <div class="col-8">
                    <h6><b>Selamat Datang</b></h1>
                        <p> Hi,{{ auth('')->user()->name }}</p>
                </div>
            </div>
            <hr>
            <div class="mt-1">
                <h6> <b>Data User</b></h6>
                <hr>
                <p style="margin: 0px">Email : {{ auth('')->user()->email }} </p>
                <p style="margin: 0px">Alamat : {{ auth('')->user()->alamat }} </p>
                <p style="margin: 0px">No HP : </p>
            </div>
        </div>
    </div> --}}
@endsection
