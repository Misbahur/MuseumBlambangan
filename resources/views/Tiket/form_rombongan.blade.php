@extends('layouts.tiket')

@section ('tiket')
<main>
  @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="container">
      <div class="text">
        <h3 class="text-center"> Selamat Data Anda telah terkonfirmasi</h3>
      </div>
      @foreach ($pengunjungs as $datapengunjung)
      <div class="row ">
        <div class="col-sm-6 mb-5 mt-5">
         

          <h4 class="nama1 card-title">Nama</h4>
          <p class="nama card-text">: {{ $datapengunjung->Nama_Pengunjung }}</p>

          <h4 class="nama1 card-title">NIK</h4>
          <p class="nama card-text">: {{ $datapengunjung->NIK }}</p>

          <h5 class="nama1 card-title">Email</h5>
          <p class="nama card-text">: {{ $datapengunjung->email }}</p>

          <h4 class="nama1 card-title">Alamat</h4>
          <p class="nama card-text">: {{ $datapengunjung->Alamat }}</p>

          <h4 class="nama1 card-title">Kunjungan Pada</h4>
          <p class="nama card-text">: {{ $datapengunjung->Berkunjung_Pada }}</p>

          <h4 class="nama1 card-title">Sesi Kunjungan</h4>
          <p class="nama card-text">: {{ $datapengunjung->sesi->waktu }}</p>

          <h4 class="nama1 card-title">Kategori</h4>
          <p class="nama card-text">: {{ $datapengunjung->kategori->Kategori }}</p>


         


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