@extends('layouts.main')

@section('container')
<!--Stop Navbar -->

<!-- Beranda Carausel-->
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
<div class="carousel-indicators">
  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
</div>
<div class="carousel-inner">
  <div class="carousel-item active" data-bs-interval="10000">
    <div data-aos="fade-down">
    <img src="https://i.ibb.co/pJzVpYf/orens.jpg" class="d-block w-100" alt="...">
    <div class="carousel-caption d-none d-md-block">
      <div data-aos="zoom-in-down"
      data-aos-delay="1000"
      >
      <h5>MUSEUM BLAMBANGAN</h5> 
      <h5>BUKA</h5>
      <p>Layanan Kunjungan Senin-Jum'at</p>
      <div class="slider-btn" >

          <a class="btn btn-1" href="/form-booking">PESAN SEKARANG</a>
      </div>
      </div>
    </div>
  </div>
  </div>
  <div class="carousel-item" data-bs-interval="2000">
    <div data-aos="fade-down">
    <img src="https://i.ibb.co/Cs3Pp0W/depan.jpg" class="d-block w-100" alt="...">
    <div class="carousel-caption d-none d-md-block">
      <h5>KERAJAAN BLAMBANGAN</h5>
      <p>Some representative placeholder content for the second slide.</p>
      <div class="slider-btn" >
        <button class="btn btn-1">BACA SELENGKAPNYA </button>
      </div>
    </div>
  </div>
  </div>

  <div class="carousel-item">
    <div data-aos="fade-down">
    <img src="https://i.ibb.co/PcX5B8Z/museummm.jpg" class="d-block w-100" alt="...">
    <div class="carousel-caption d-none d-md-block">
      <h5>BANYUWANGI 1771</h5>
      <p>Some representative placeholder content for the third slide.</p>
      <div class="slider-btn" >
        <button class="btn btn-1">READ MORE</button>
      </div>
    </div>
  </div>
</div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Next</span>
</button>
</div>
<!-- Stop Beranda -->




  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->

<script type="text/javascript">
window.addEventListener("scroll", function(){
var header = document.querySelector("header");
header.classList.toggler ("sticky", window.scrollY > 0); 
})
</script>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
  -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
@endsection