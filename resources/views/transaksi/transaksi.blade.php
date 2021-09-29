@extends('adminlte::page')

@section('content')
<main>
    <div class="text">
      <h5 class="text-center">Jam Kunjungan Museum Blambangan</h5>
    </div>
    <table class="table table-light table-striped">
      <thead class="text-center">
        <tr>
          <th scope="col"></th>
          <th scope="col">No</th>
          <th scope="col">Status</th>
          <th scope="col">Nama Pengunjung</th>
          <th scope="col">Jam Kunjungan</th>
          <th scope="col">Kategori</th>
          <th scope="col">Tanggal Kunjungan</th>
          <th scope="col">Status</th>
          <th scope="col">Tanggal Transaksi</th>
        </tr>
      </thead>
      <tbody class="text-center">
        @foreach ($transaksis as $transaksi)
        <tr>
          <th scope="row"></th>
          <td>{{ $loop->iteration }}</td>
          <td>
            @if ($transaksi->Status == 1)
            <a class="btn btn-danger" href="{{ url('/transaksi/status/'.$transaksi) }}">Batalkan Transaksi</a>
            @else
            <a class="btn btn-success" href="{{ url('/transaksi/status/'.$transaksi) }}">Konfirmasi</a>
            @endif
          </td>
          <td>{{ $transaksi->Pengunjung->Nama_Pengunjung }}</td>
          <td>{{ $transaksi->Pengunjung->sesi->waktu }}</td>
          <td>{{ $transaksi->Pengunjung->kategori->Kategori }}</td>
          <td>{{ $transaksi->Pengunjung->Berkunjung_Pada }}</td>
          <td><label class="label label-success">{{ ($transaksi->Status == 1) ? 'Terkonfirmasi' : 'Belum Terkonfirmasi' }}</label></td>
          <td>{{ $transaksi->created_at }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </main>
@endsection