 <!-- navbar -->
 <nav class="navbar navbar-expand-lg bg-transparentf d-none d-sm-block d-md-none d-lg-block fixed-top navbar-light py-4">
     <div class="container">
         <a class="navbar-brand" style="color: #000000; font-weight: 700; font-size:18px"
             href="{{ route('home') }}">Koperasi RSUDZA</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
             aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav">
                 <li class="nav-item active">
                     <a class="nav-link" href="{{ route('home') }}">Beranda <span class="sr-only">(current)</span></a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="/#produk">Produk</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="/#kategori
                     ">Kategori</a>
                 </li>
             </ul>
         </div>
         <div class="collapse navbar-collapse  " id="navbarSupportedContent">
             @auth
                 <ul class="navbar-nav ml-auto">
                     <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                             data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             Hallo,{{ auth('')->user()->name }}
                         </a>
                         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                             <a class="dropdown-item" href="/pesanandetail">Pesanan</a>
                             <form class="ml-4" action="/logout" method="post">
                                 @csrf
                                 <button type="submit" class="border-0 btn text-black" style="font-size:16px ; padding:0 "
                                     type="submit">Keluar</button>
                             </form>
                         </div>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link fa fa-cart-plus mr-3" style="font-size: 20px;" href="/keranjang"></a>
                     </li>
                 @else
                     <a href="/login" class="btn d-inline my-2 my-sm-0 ml-auto text-white"
                         style="background-color: #f72601;s" type="submit">Masuk</a>
                 @endauth
             </ul>
         </div>
     </div>
 </nav>
 </div>

 <style>
     .navcolor {
         background-color: #ffffff;
         color: #275062;
         box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0);
         transition: all ease-in-out 0.7s;
     }

     .navbar-nav {
         font-size: 18px;
     }

     .nav-link {
         justify-content: center
     }

     .bg-transparentf {
         transition: all ease-in 0.5s;
         background-color: #ffffff;
         /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.2); */
     }
 </style>

 <script>
     const navbar = document.getElementsByTagName('nav')[0];
     window.addEventListener('scroll', function() {
         if (window.scrollY > 2) {
             navbar.classList.replace('bg-transparentf', 'navcolor');
         } else if (this.window.scrollY <= 0) {
             navbar.classList.replace('navcolor', 'bg-transparentf')
         }
     });
 </script>
 <!-- akhirnavbar -->
