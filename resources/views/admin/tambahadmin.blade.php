@extends('layout.admin.main')


@section('body')
    <div class="container-fluid p-5">
        <form action="/kelolaadmin" method="post" style="width: 500px;" class="text-left ">
            @csrf

            <h4 style="color: #000000">
                Tambah Admin
            </h4>
            <hr>
            <div class="form-outline mb-4">
                <label class="form-label" for="name">Nama</label>
                <input type="text" name="name" id="name"
                    class="form-control form-control-lg @error('name') is-invalid @enderror" value="{{ old('name') }}" />

                @error('name')
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="email">Alamat Email</label>
                <input type="email" id="email" name=email
                    class="form-control form-control-lg  @error('email') is-invalid @enderror"
                    value="{{ old('email') }}" />
                @error('email')
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="password">Password</label>
                <input type="password" id="password" name=password
                    class="form-control form-control-lg  @error('password') is-invalid @enderror"
                    value="{{ old('password') }}" />
                @error('password')
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            {{-- <select class="mb-2" name="is_admin" id="is_admin" required>

                <option value="1">Admin </option>
                <option value="0">User </option>

            </select> --}}

            <div class="pt-1 mb-4">
                <button class="btn " style="background-color:#f30000; color: rgb(221, 221, 221);" type="submit">Tambahkan
                    Data</button>
            </div>
        </form>
    </div>



    </div>
@endsection
