@extends('layouts.isikoleksi')

@section('koleksi')
<section class="sec-first">
			<div class="sec-first-container">
				<div class="img-detail">
					<div class="img-back"></div>
                    <img src="https://i.ibb.co/4RzbvQc/museum.jpg">
				</div>
                <div data-aos="fade-down"
                     data-aos-delay="500"
                    >
				<div class="container-detail">
					<span></span> 
					<h1>Situs Peninggalan<br>Kebudayaan Hindu-Budha</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="slider-btn" >
                 <div data-aos="fade-right"
                     data-aos-delay="600"
                    >
            <button class="btn btn-1">Baca Selengkapnya</button>
            </div>
                </div>
			</div>
            </div>
		</section>
		<section class="sec-second">
			<div class="img-slide">
				<img class="slides" src="https://i.ibb.co/XSLgTzW/Cawann.jpg">
				<img class="slides" src="https://i.ibb.co/YfhYMMr/kitabb.jpg">
                <img class="slides" src="https://i.ibb.co/SdWfMwY/mesintik.jpg">
				<div class="btn-control">
					<button class="" onclick="plusDivs(-1)">&#10094;</button>
					<button class="" onclick="plusDivs(1)">&#10095;</button>
				</div>
			</div>
			<div class="container-detail">
				<span></span>
                <div data-aos="fade-left"
                data-aos-delay="600"
                >
				<h1>Explore  our<br>amazing products</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            <div class="slider-btn" >
                  <div data-aos="fade-left"
                data-aos-delay="800"
                >
            <button class="btn btn-2">Baca Selengkapnya</button>
				
			</div>
		</section>
		<section class="container">
           <div class="row row-cols-1 row-cols-md-3 g-4">           
  <div class="col">
    <div class="card h-100">
      <img src="https://i.ibb.co/MRG1NZt/Piring.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Piring</h5>
        <p class="card-text">Piring. Benda ini berasal dari Dinasti Qing.Dibuat pada abad 18 sampai 19 Masehi</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="https://i.ibb.co/vjqmpKk/Mangkuk.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Mangkuk</h5>
        <p class="card-text">Mangkuk. Benda ini berasal dari Dinasti Qing. Dibuat pada abad 19</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="https://i.ibb.co/RpdnR4Q/Kendi.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Kendi</h5>
        <p class="card-text">Kendi. Benda ini berasal dari Dinasti ming. Pada akhir abad 17</p>
      </div>
    </div>
  </div>
</div>
		</section>
<br>
		<section class="container">
           <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="https://i.ibb.co/QNzjQ7M/islam.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Kitab</h5>
        <p class="card-text">Kitab beraksara Arab dan berbahasa campuran Arab dan Jawa. Berisi tentang pernikahan, haji, dan aturan lainnya terkait keislaman.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="https://i.ibb.co/1Rtq49f/Terak-Besi.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Terak Besi</h5>
        <p class="card-text">	Benda ini adalah limbah lelehan besi yang ditemukan di Situs Watukebo, Kec. Wongsorejo.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="https://i.ibb.co/44Rw3Yj/Cawan.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Cawan</h5>
        <p class="card-text">Sebuah cawan yang disangga sesosok laki-laki Eropa. Cawan ini milik Bupati Banyuwangi Pringgo Kusumo.</p>
      </div>
    </div>
  </div>
</div>
		</section>
<br>
<section class="container">
           <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="https://i.ibb.co/VmJSrDR/Kacip.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Kacip</h5>
        <p class="card-text">Alat pemotong pinang atau gambir. Benda ini serupa dengan gunting bertangkai panjang.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="https://i.ibb.co/xYHW58v/Lampu-Minyak.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Lampu Minyak</h5>
        <p class="card-text">Alat penerangan dari abad 17 Masehi. Hiasan pelipit terlihat melingkari badan benda. Sedangkan, bagian pegangan berbentuk sulur yang cantik.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="https://i.ibb.co/pXXQLJQ/lontar-yusuf.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Lontar Yusuf</h5>
        <p class="card-text">	Sebuah manuskrip beraksara Jawa. Terbuat dari daun tal atau palem. Lontar ini berisi riwayat Nabi Yusuf.</p>
      </div>
    </div>
  </div>
</div>
		</section>
@endsection