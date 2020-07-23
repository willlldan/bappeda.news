@extends('layout/main')

@section('title', 'Bappeda News')

@section('container')

<!-- <div class="container-slide mt-3  mb-3 ml-3 active" style="background-color: #000; width:100px; height: 100px">

</div> -->
<div class="container mt-5">
<!-- caraousel -->
<div id="carouselExampleCaptions" class="carousel slide caraousel-container" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner mb-4" id="caraousel-news">

  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- end caraousel -->

<!-- Card News -->

  <div class="row" id="news-list"> </div>
  <div class="spinner-border text-success position-relative mt-5" style="left:50%" role="status" id="wait">
    <span class="sr-only">Loading...</span>
  </div>
</div>



<!-- End Card News -->
@endsection