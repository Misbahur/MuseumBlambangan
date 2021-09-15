@extends('adminlte::page')

@section('content')
<main>
    <div class="text">
      <h5 class="text-center">Jam Kunjungan Museum Blambangan</h5>
    </div>
    <table class="table table-dark table-striped">
      <thead>
        <tr>
          <th></th>
          <th>No</th>
          <th>Nama Sesi</th>
          <th>Jam Kunjungan</th>
          <th>Deskripsi</th>
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
          <td class="text-center">
            <form action="{{ route('sesi.destroy',$sesi->id) }}" method="POST">

                <a class="btn btn-info btn-sm" href="{{ route('sesi.show',$sesi->id) }}">Show</a>

                <a class="btn btn-primary btn-sm" href="{{ route('sesi.edit',$sesi->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
            </form>
        </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </main>
@endsection