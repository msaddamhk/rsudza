<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    {{-- <link rel="stylesheet" type="text/css" href=" {{ asset('css/dashboard.css') }}"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>


    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- css -->
    <link rel="stylesheet" href="css/index.css">

    <!-- trix editor -->
    <link rel="stylesheet" type="text/css" href="css/trix.css">
    <script type="text/javascript" src="js/trix.js"></script>
</head>
<style></style>



<body style="font-family: 'poppins', sans-serif ">


    <!-- sidebar -->
    <div class="navigation text-white bg-dark">
        <div class="bnilogo pt-3 ">
            <h6 style="color: #ffffff ;border-color: rgb(0, 0, 0); ">Admin</h6>
        </div>
        <hr>
        <ul>
            <li>
                <a href="/admin">
                    <span style="color: rgb(143, 143, 143)" class="title ">Kelola Barang</span>
                </a>
            </li>
            <li>
                <a href="/kategori">
                    <span class="title" style="color: rgb(143, 143, 143)">Kelola
                        Kategori</span>
                </a>
            </li>
            <li>
                <a href="/kelolaadmin">
                    <span class="title" style="color: rgb(143, 143, 143)">Kelola Admin
                    </span>
                </a>
            </li>
            <li>
                <a href="/kelolapesanan">
                    <span class="title" style="color: rgb(143, 143, 143)">Kelola Pesanan
                    </span>
                </a>
            </li>
            <li>
                <a href="/kelolakeuangan">
                    <span class="title" style="color: rgb(143, 143, 143)">Keuangan
                    </span>
                </a>
            </li>
            <li class="title">
                <form action="/logout" method="post">
                    @csrf
                    <button class="btn m-2 btn-success text-white " style="text-decoration: none">Keluar</button>
                </form>
            </li>
        </ul>
    </div>

    <!-- navbar -->
    <div class="main">

        {{-- <div class="px-0 pr-0">
            <nav class="navbar  bg-danger ">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
            </nav>
        </div> --}}
        @yield('body')
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="js/script.js"></script>
    {{-- <script src="{{ asset('js/script.js') }}"></script> --}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    {{-- <script src="js/script.js"></script> --}}
    <script src="chart.js"></script>
</body>

</html>
