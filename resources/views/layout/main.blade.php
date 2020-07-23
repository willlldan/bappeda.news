<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">

  <title>@yield('title')</title>
</head>

<body>

  <!-- New navbar -->

  <nav class="navbar navbar-expand-lg navbar-mainbg">
    
    <a class="navbar-brand navbar-logo" href="javascript:mainNews()">
    <img src="assets/img/logo-bappeda.png" alt="">  
    Bappeda<b>News</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars text-white"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <div class="hori-selector">
          <div class="left"></div>
          <div class="right"></div>
        </div>
        <li class="nav-item active">
          <a class="nav-link" href='javascript:mainNews();' ><i class="fas fa-tachometer-alt"></i>Berita Utama</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='javascript:category("Jawa Barat", "jawa-barat");'><i class="far fa-address-book"></i>Jawa barat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='javascript:category("Ridwan Kamil", "ridwan-kamil");'><i class="far fa-clone"></i>Ridwan Kamil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='javascript:category("covid OR corona", "covid");'><i class="far fa-calendar-alt"></i>Covid-19</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0 ml-5" style="z-index: 2;">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" id="search-input">
      </form>
    </div>
  </nav>

  <!-- ENd New Navbar -->


  <!-- Card News -->
  @yield('container')
  <!-- End Card News -->

  <!-- footer -->
  <!-- <footer>
    Bappeda Jabar
  </footer> -->
  
  <!-- end footer -->


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="js/apiNews.js"></script>
  <script src="js/script.js"></script>
</body>

</html>