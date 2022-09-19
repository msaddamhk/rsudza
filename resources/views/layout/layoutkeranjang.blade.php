<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> --}}
    {{-- <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="SB-Mid-client-Of0WqJFIsjFhGStH"></script> --}}

</head>


<body style="font-family: 'Poppins', sans-serif;">

    @include('partials.navbar')
    @yield('body')
    <!-- Footer -->
    <footer class=" text-lg-start text-muted border " style="background-color: #ffffff; margin-top: 80px;">
        <!-- Section: Social media -->

        {{-- <section class=" d-flex justify-content-center justify-content-lg-between p-4 border-bottom"> --}}
        <!-- Left -->
        {{-- <div class="me-5 d-none d-lg-block text-black ">
          <span>Terhubung dengan kami di jejaring sosial:</span>
      </div> --}}
        <!-- Left -->

        <!-- Right -->
        {{-- <div>
              <a href="" class="me-4  text-reset" style="color: #275062; font-size:20px">
                  <i class="fab fa-facebook-f"></i>
              </a>
              <a href="" class="me-4 text-reset" style="color: #275062; font-size:20px">
                  <i class="fab fa-twitter"></i>
              </a>
              <a href="" class="me-4 text-reset" style="color: #275062; font-size:20px">
                  <i class="fab fa-whatsapp"></i>
              </a>
              <a href="" class="me-4 text-reset" style="color: #275062; font-size:20px">
                  <i class="fab fa-instagram"></i>
              </a>


          </div> --}}
        <!-- Right -->
        {{-- </section> --}}
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="p-4">
            <div class="container text-black  text-md-start ">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-6 mt-md-0  mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Alamat
                        </h6>
                        <p>
                            Here you can use rows and columns to organize your footer content. Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3  mx-auto mb-4">
                        <!-- Links -->
                        {{-- <h6 class="text-uppercase fw-bold mb-4">
                          Products
                      </h6> --}}
                        <p>
                            <a href="#!" class="text-reset">Bantuan</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Video</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Kategori</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Produk</a>
                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    {{-- <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                      <!-- Links -->

                      <p>
                          <a href="#!" class="text-reset">Help</a>
                      </p>
                  </div> --}}
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="fw-bold mb-4">
                            Hubungi Kami
                        </h6>
                        {{-- <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p> --}}
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            gampongnusa@gmail.com
                        </p>
                        <p><i class="fab fa-instagram me-3"></i> gampongnusaku</p>
                        <p><i class="fas fa-phone me-3"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center text-white p-4" style="background-color: #275062">
            © 2021 Copyright:
            <a class="text-white fw-bold">M Saddam Husein Khatami</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- akhir Footer -->



    <!-- aos -->
    <!-- ak aos-->
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
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
    <script src="{{ asset('js/autoNumeric.min.js') }}"></script>




    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    @yield('javascript')

</body>

</html>
