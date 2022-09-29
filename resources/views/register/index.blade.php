<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://www.google.com/recaptcha/api.js"></script>

    <!-- aos css file cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

</head>


<body style="font-family: 'Poppins', sans-serif;">


    <section class="login d-flex">

        <div class="container  d-block d-sm-none p-5 align-content-center h-100">
            <div class="">
                <h2 class="mb-4" style="font-size: 30px">Silahkan daftar akun</h2>
                <form action="/register" method="post" class="text-left ">
                    @csrf
                    <div class="form-outline mb-4">
                        <label class="form-label" for="name">Nama</label>
                        <input type="text" name="name" id="name"
                            class="form-control form-control-lg @error('name') is-invalid @enderror"
                            value="{{ old('name') }}" />

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

                    <div class="form-outline mb-4">

                        {!! NoCaptcha::renderJs() !!}
                        {!! NoCaptcha::display() !!}

                        @if ($errors->has('g-recaptcha-response'))
                            <span class="help-block">
                                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                            </span>
                        @endif

                    </div>

                    <div class="pt-1 mb-4">
                        <button class="btn btn-block" style="background-color: #f30000; color: rgb(221, 221, 221)"
                            type="submit">
                            Daftar Sekarang
                        </button>
                    </div>
                </form>
                <p>Sudah Registrasi? <a href="/login" class="link-info">Masuk sekarang</a></p>
            </div>
        </div>













        <div class="kri w-50 h-100 d-none d-sm-block d-md-none d-lg-block">
            <div class="row justify-content-center align-content-center h-100">
                <div class="col-6">
                    <h2 class="mb-4" style="font-size: 30px">Silahkan daftar akun</h2>

                    <form action="/register" method="post" class="text-left ">
                        @csrf
                        <div class="form-outline mb-4">
                            <label class="form-label" for="name">Nama</label>
                            <input type="text" name="name" id="name"
                                class="form-control form-control-lg @error('name') is-invalid @enderror"
                                value="{{ old('name') }}" />

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

                        <div class="form-outline mb-4">

                            {!! NoCaptcha::renderJs() !!}
                            {!! NoCaptcha::display() !!}

                            @if ($errors->has('g-recaptcha-response'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                </span>
                            @endif

                        </div>

                        <div class="pt-1 mb-4">
                            <button class="btn btn-block" style="background-color: #f30000; color: rgb(221, 221, 221)"
                                type="submit">
                                Daftar Sekarang
                            </button>
                        </div>
                    </form>
                    <p>Sudah Registrasi? <a href="/login" class="link-info">Masuk sekarang</a></p>
                </div>
            </div>
        </div>

        <div class="kanan bg-primary w-50 h-100 d-none d-sm-block d-md-none d-lg-block"
            style="background-image: url(foto/rsudza1.jpg);background-size: cover">
            {{-- <div class="row justify-content-center">
                <div class="col-6">
                </div>
            </div> --}}
        </div>
    </section>

    <style>
        .login {
            height: 100vh;
        }
    </style>









    <!-- aos -->
    <!-- aos js file cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- ak aos-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="js/aos.js"></script>
</body>

</html>
