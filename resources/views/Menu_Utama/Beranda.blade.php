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

<section id="koleksi">
         
            <div class="gallery mt-5">
              <br>
              <div class="text-center">KOLEKSI</div>
              <br>
              <br>
              <div class="card">
                  <div class="card-image1"></div>
                  <div class="card-text">
                      <!-- <div class="jenis">Prasejarah</div> -->
                      <p>Alat batu yang berasal dari periode neolitik (3500 SM). Beliung ini telah diserpih, diupam, dan memiliki bidang tajam.
                      </p>
                  </div>
                  <div class="card-stats1">
                      <div class="stat">
                          <a class="btn" href="/prasejarah">Prasejarah</a>
                      </div>
                  </div> 
              </div>
              <div class="card">
                  <div class="card-image2"></div>
                  <div class="card-text">
                      <!-- <div class="jenis">Hindu-Budha</div> -->
                      <p>
                          PADUKA BHATTARA, Penguasa pertama ujung Timur Jawa (Blambangan) yaitu Sri Nagarawardhani. Berselang beberapa tahun Sri Nagarwardhani pindah tugas sehingga pemerintahan Blambangan diserahkan suaminya yang juga bergelar Paduka Bhattara Wirabumi.
                      </p>
                  </div>
                  <div class="card-stats2">
                      <div class="stat">
                          <a class="btn" href="/hindu-budha">Hindu-Budha</a>
                      </div>
                  </div> 
              </div>
              <div class="card">
                  <div class="card-image3"></div>
                  <div class="card-text">
                      <!-- <div class="jenis">Islam</div> -->
                      <p>Kitab beraksara Arab dan berbahasa campuran Arab dan Jawa. Berisi tentang pernikahan, haji, dan aturan lainnya terkait keislaman.
                      </p>
                  </div>
                  <div class="card-stats3">
                      <div class="stat">
                          <a class="btn" href="/islam">Islam</a>
                      </div>
                  </div> 
              </div>



              <div class="card">
                  <div class="card-image4"></div>
                  <div class="card-text">
                      <!-- <div class="jenis">Kolonial</div> -->
                      <p>Mesin Tik merek Halda. Diproduksi oleh N.V. G.Kolff di Batavia tahun 1848.
                      </p>
                  </div>
                  <div class="card-stats4">
                      <div class="stat">
                          <a class="btn"href="/kolonial">Kolonial</a>
                      </div>
                  </div> 
              </div>
          </div>
</section>

<section id="AboutUs">

    <div id="lambang" class="row">
      <div class="col text-center">
        <h2>
          Lambang Museum Blambangan
        </h2>
      </div>
    </div>
    <div id="gambar" class="row text-center mt-5">
      <div class="col">
        <img src="https://i.ibb.co/0DGD8Kr/download.jpg" alt="" height="250px" width="250px">
      </div>
    </div>

    <div class="container">
      <div class="row text-center mt-5">
        <div class="col">
          <h3>
            Makna Lambang Museum Blambangan
          </h3>
        </div>
      </div>
      <div class="row justify-content-center mt-5">
        <div class="col">
          <h4 class="text-center">Makna Bentuk Lambang Museum Blambangan</h4>
          <ol>
            <li>Makna Lambang Museum Blambangan</li>
            <dd> Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit aliquam porro qui ratione at, fuga velit vero omnis est mollitia repellendus aperiam ab a corrupti harum, odio quae neque maiores?</dd>
            <li>Makna Lambang Museum Blambangan</li>
            <dd> Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit aliquam porro qui ratione at, fuga velit vero omnis est mollitia repellendus aperiam ab a corrupti harum, odio quae neque maiores?</dd>
            <li>Makna Lambang Museum Blambangan</li>
            <dd> Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit aliquam porro qui ratione at, fuga velit vero omnis est mollitia repellendus aperiam ab a corrupti harum, odio quae neque maiores?</dd>
            <li>Makna Lambang Museum Blambangan</li>
            <dd> Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit aliquam porro qui ratione at, fuga velit vero omnis est mollitia repellendus aperiam ab a corrupti harum, odio quae neque maiores?</dd>
          </ol>
        </div>
        <div class="col">
          <h4 class="text-center">Makna Bentuk Lambang Museum Blambangan</h4>
          <ol>
            <li>Makna Lambang Museum Blambangan</li>
            <dd> Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit aliquam porro qui ratione at, fuga velit vero omnis est mollitia repellendus aperiam ab a corrupti harum, odio quae neque maiores?</dd>
            <li>Makna Lambang Museum Blambangan</li>
            <dd> Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit aliquam porro qui ratione at, fuga velit vero omnis est mollitia repellendus aperiam ab a corrupti harum, odio quae neque maiores?</dd>
            <li>Makna Lambang Museum Blambangan</li>
            <dd> Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit aliquam porro qui ratione at, fuga velit vero omnis est mollitia repellendus aperiam ab a corrupti harum, odio quae neque maiores?</dd>
            <li>Makna Lambang Museum Blambangan</li>
            <dd> Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit aliquam porro qui ratione at, fuga velit vero omnis est mollitia repellendus aperiam ab a corrupti harum, odio quae neque maiores?</dd>
          </ol>
        </div>
      </div>
      </div>


</section>

<section id="contactus">
  <div id="contact" class="justify-content-center mt-5 mb-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col">
          <h3 class="text-center">Masukan</h3>
          <div class="row mb-3 mt-5">
            <div class="col-md-6">
              <label for="nama" class="form-label">Nama :</label>
              <input type="text" class="form-control" id="nama" placeholder="Nama">
            </div>

            <div class="col-md-6">
              <label for="email" class="form-label">Email :</label>
              <input type="email" class="form-control" id="email" placeholder="email">
            </div>
          </div>
          <div class="mb-3">
            <label for="pesan" class="form-label">Pesan :</label>
            <textarea class="form-control" id="pesan" rows="3" placeholder="Masukkan pesan mu disini..."></textarea>
          </div>
          <div class="d-flex">
            <button type="button" class="btn p-3 "><i class="fas fa-envelope me-3"></i>Kirim</button>
          </div>
        </div>
        <div class="col text-center">
          <h3> Lokasi Museum</h3>
          <iframe class="text-center mt-5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.819281900675!2d114.36570421486594!3d-8.220921594083931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd14532c96b124f%3A0x879dd27dc1ad393e!2sDinas%20Kebudayaan%20dan%20Pariwisata%20Kabupaten%20Banyuwangi!5e0!3m2!1sid!2sid!4v1629876759330!5m2!1sid!2sid" width="625" height="285" style="border:5px solid #d1d0d6" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection