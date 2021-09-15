@extends('adminlte::page')

@section('content')
<main>
    <div class="text">
      <h5 class="text-center">Jam Kunjungan Museum Blambangan</h5>
    </div>
    <table class="table table-dark table-striped">
      <thead>
        <tr>
          <th scope="col"></th>
          <th scope="col">No</th>
          <th scope="col">Nama Sesi</th>
          <th scope="col">Jam Kunjungan</th>
          <th scope="col">Deskripsi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($sesis as $sesi)
        <tr>
          <th scope="row"></th>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $sesi->nama_sesi }}</td>
          <td>{{ $sesi->waktu }}</td>
          <td>{{ $sesi->deskripsi }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </main>
@endsection