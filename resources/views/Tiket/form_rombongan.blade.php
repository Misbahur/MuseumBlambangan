@extends('layouts.tiket')

@section ('tiket')
<main>
    <div class="container">
      <div class="text">
        <h3 class="text-center"> Selamat Data Anda telah terkonfirmasi</h3>
      </div>
      @foreach ($pengunjungs as $datapengunjung)
      <div class="row ">
        <div class="col-sm-6 mb-5 mt-5">
         

          <h5 class="nama1 card-title">Nama</h5>
          <p class="nama card-text">: {{ $datapengunjung->Nama_Pengunjung }}</p>

          <h5 class="nama1 card-title">NIK</h5>
          <p class="nama card-text">: {{ $datapengunjung->NIK }}</p>

          <h5 class="nama1 card-title">Email</h5>
          <p class="nama card-text">: {{ $datapengunjung->email }}</p>

          <h5 class="nama1 card-title">Alamat</h5>
          <p class="nama card-text">: {{ $datapengunjung->Alamat }}</p>

          <h5 class="nama1 card-title">Kunjungan Pada</h5>
          <p class="nama card-text">: {{ $datapengunjung->Berkunjung_Pada }}</p>

          <h5 class="nama1 card-title">Sesi Kunjungan</h5>
          <p class="nama card-text">: {{ $datapengunjung->sesis->waktu }}</p>

          <h5 class="nama1 card-title">Kategori</h5>
          <p class="nama card-text">: {{ $datapengunjung->kategoris->kategori }}</p>


         


        </div>
        <div class="col-sm-6 mb-5 mt-5">
          <div class="mb-5">{!! DNS2D::getBarcodeHTML('4445645656', 'QRCODE') !!}</div>
      </div>
      </div>
      @endforeach

      <!-- <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Nama    :</li>
          <li class="list-group-item">NIK     :</li>
          <li class="list-group-item">A third item</li>
        </ul>
      </div>

      <div>
        <h3 class="text2 text-center">Harap Menunggu Konfirmasi Melalui Email</h3>
      </div> -->


    </div>
  </main>
@endsection