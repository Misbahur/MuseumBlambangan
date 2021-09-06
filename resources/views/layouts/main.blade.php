<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Museum Blambangan | {{ $title }} </title>
</head>
<body>

<!-- Navbar -->  

<nav class="navku navbar navbar-expand-lg navbar-dark bg-danger ">

<div class="container">
  <div data-aos="zoom-out-down">
  <a class="logo navbar-brand" href="/">Museum Blambangan</a> 
  </div>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
 
    <ul class="navbar-nav ms-auto"> 
      <li class="nav-item">
        <div data-aos="zoom-out-down">
        <a class="nav-link {{ ($title === 'Beranda') ? 'active' : ''  }}" aria-current="page" href="/">Beranda</a>
      </li>
      <li class="nav-item">
         <div data-aos="zoom-out-down">
        <a class="nav-link {{ ($title === 'Koleksi') ? 'active' : ''  }}" href="/koleksi">Koleksi</a>
      </li>
      <li class="nav-item">
         <div data-aos="zoom-out-down">
        <a class="nav-link {{ ($title === 'Tentang') ? 'active' : ''  }}" href="/about">Tentang</a>
      </li>
       <li class="nav-item">
          <div data-aos="zoom-out-down">
        <a class="nav-link {{ ($title === 'Contact') ? 'active' : ''  }}" href="/contact">Kontak</a>
      </li>  
    </ul>
</div>
</div>
</div>
</nav>
  @yield('container')
  <footer>
  <div class="container">
    <div class="row">
      <div class="col-6 mt-3">
        <h5>Museum Blambangan</h5>
        <p><i class="fas fa-phone"></i> 0333 414172 | <i class="fas fa-envelope"></i>
          jingga.banyuwangi@gmail.com
        </p>
      </div>
      <div class="col-6 mt-3">
        <div class="socmed">
          <a class="tombol-whatsapp" type="button" href="https://wa.me/6281331992911" title="Hubungi Saya" rel="noopener" target="_blank">
         <i class="fab fa-whatsapp"></i></a> 
          <a class="tombol-instagram" type="button" href="https://www.instagram.com/museumblambangan/" title="Hubungi Saya" rel="noopener" target="_blank">
          <i class="fab fa-instagram"></i> </a>
          <a class="tombol-youtube" type="button" href="" title="Hubungi Saya" rel="noopener" target="_blank">
            <i class="fab fa-youtube"></i> </a>
      </div>
    </div>
    <div class="row text-center">
      <p>Copyright &copy;2021 -  museumblambangan| All rights reserved</p>
    </div>
  </div>
</footer>
</body>
</html>