<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- aos css file cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/index.css ') }}">
    <link rel="stylesheet" href="{{ asset('asset/bootstrap/css/bootstrap.min.css ') }}">

    <!-- slick css -->
    <link rel="stylesheet" href="{{ asset('css/slick.css ') }}">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Albert+Sans:wght@300&family=Nunito+Sans:wght@300;400;600&family=Open+Sans:wght@400;500&family=Ubuntu&display=swap"
        rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<!-- font -->


{{-- font-family: 'Poppins', sans-serif; --}}

<body style="min-height: 100vh; font-family: 'Ubuntu', sans-serif; ">
    {{-- font-family: 'Poppins', sans-serif; --}}

    @include('partials.navbar')
    @yield('body')

    <div class="d-block d-sm-none  d-block d-sm-none p-2 fixed-top" style="background-color: #000000">
        <div class="container text-white">
            <a href="javascript:window.history.go(-1);" class="text-white" style="text-decoration: none">
                <p class="mt-3" style="font-size: 18px"><i class="fa fa-arrow-left m-1" aria-hidden="true"></i>
                    Kembali
                </p>
            </a>
        </div>
    </div>

    <footer class=" text-lg-start d-none d-sm-block d-md-none d-lg-block text-muted ">
        <div class="text-center  p-4" style="background-color: #000000">
            © 2022 Copyright:
            <a class=" text-white fw-bold">Putra Zairi Taufiq</a>
        </div>
    </footer>

    {{-- futer mobile --}}
    <footer class="text-center shadow-lg fixed p-4 d-block d-sm-none" style="background-color: #ffffff;">

        <div class="row">
            <div class="col-3 text-white" style="font-size: 15px">
                <a href="/" class="sidebar-item {{ $title === 'Beranda' ? 'active' : '' }}">
                    <i class="fa-solid fa-house"></i>
                </a>
            </div>
            <div class="col-3 text-white" style="font-size: 15px">
                <a href="/pesanandetail" class="sidebar-item {{ $title === 'Pesanan' ? 'active' : '' }}">
                    <i class="fa-solid fa-list"></i>
                </a>
            </div>
            <div class="col-3 text-white" style="font-size: 15px">
                <a href="/keranjang" class="sidebar-item {{ $title === 'Keranjang' ? 'active' : '' }}">
                    <i class="fas fa-shopping-cart"></i>
                </a>
            </div>
            @auth
                {{-- keluar --}}
                <div class="col-3 text-white" style="font-size: 15px">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="text-white bg-white border-0 " style="font-size: 15px"
                            type="submit"><i class="fas fa-sign-out-alt sidebar-item "></i></button>
                    </form>
                    {{-- <a href="/user" class="sidebar-item {{ $title === 'User' ? 'active' : '' }}">
                        <i class="fa-solid fa-user"></i>
                    </a> --}}
                </div>
            @else
                {{-- masuk --}}
                <div class="col-3 text-white" style="font-size: 15px">
                    <a href="/login" class="sidebar-item {{ $title === 'User' ? 'active' : '' }}">
                        <i class="fa fa-sign-in" aria-hidden="true">
                        </i>
                    </a>
                </div>
            @endauth
        </div>
    </footer>

    <style>
        .sidebar-item {
            color: #000000
        }

        .sidebar-item.active {
            color: #e90000;
        }

        .fixed {
            position: sticky;
            margin: 0px;
            padding: 0px;
            bottom: 0%;
            margin-bottom: calc(0px + env(keyboard-inset-height));
        }
    </style>
    {{-- akhir mobile --}}
    <!-- akhir Footer -->


    <!-- aos -->
    <!-- ak aos-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/jva.js') }}"></script>
    {{-- <script src="{{ asset('js/trix.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            duration: 1500,
            delay: 400,
            once: true
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    @yield('javascript')

</body>

</html>
