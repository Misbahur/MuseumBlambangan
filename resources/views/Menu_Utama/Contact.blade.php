@extends('layouts.main')

@section('container')
<section id="contactus">
  <div id="contact" class="justify-content-center mt-5 mb-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col">
          <h3 class="text-center mt-5 mb-5">Masukan</h3>
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
        <div class="col text-center mt-5 mb-5">
          <h3> Lokasi Museum</h3>
          <iframe class="text-center mt-5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.819281900675!2d114.36570421486594!3d-8.220921594083931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd14532c96b124f%3A0x879dd27dc1ad393e!2sDinas%20Kebudayaan%20dan%20Pariwisata%20Kabupaten%20Banyuwangi!5e0!3m2!1sid!2sid!4v1629876759330!5m2!1sid!2sid" width="625" height="285" style="border:5px solid #d1d0d6" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection