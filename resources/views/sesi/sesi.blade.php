@extends('adminlte::page')

@section('content')
<main>
  <div class="row">
    <div class="col-lg-12 margin-tb">
      <div class="text">
        <h5 class="text-center">Jam Kunjungan Museum Blambangan</h5>
      </div>
      @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
      <div class="float-right my-2">
        <a class="btn btn-success" href="{{ route('sesi.create') }}"><i class="fas fa-fw fa-plus"></i> Buat Sesi Baru</a>
      </div>
    </div>
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
            <form action="{{ url('sesi/'.$sesi->id) }}" method="POST">
              @method('DELETE')
              @csrf

                <a class="btn btn-info btn-sm" href="{{ route('sesi.show',$sesi->id) }}"><i class="fas fa-fw fa-eye"></i> Show</a>

                <a class="btn btn-primary btn-sm" href="{{ url('sesi/'.$sesi->id.'/edit') }}"><i class="fas fa-fw fa-pen"></i> Edit</a>


                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-fw fa-trash"></i>Delete</button>
            </form>
        </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </main>
@endsection