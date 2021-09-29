@extends('adminlte::page')

@section('content')
<main>
    <div class="text">
      <h5 class="text-center">Kategori Kunjungan</h5>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="float-right my-2">
      <a class="btn btn-success" href="{{ url('/kategori/create') }}"><i class="fas fa-fw fa-plus"></i> Buat Kategori Baru</a>
    </div>
    <table class="table table-dark table-striped">
      <thead>
        <tr>
          <th scope="col"></th>
          <th scope="col">No</th>
          <th scope="col">Kategori</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($kategoris as $kategori)
        <tr>
          <th scope="row"></th>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $kategori->Kategori }}</td>
          <td class="text-center">
            <form action="{{ url('kategori/'.$kategori->id) }}" method="POST">
              @method('DELETE')
              @csrf

                <a class="btn btn-info btn-sm" href="{{ url('kategori/'.$kategori->id) }}"><i class="fas fa-fw fa-eye"></i> Show</a>

                <a class="btn btn-primary btn-sm" href="{{ url('kategori/'.$kategori->id.'/edit') }}"><i class="fas fa-fw fa-pen"></i> Edit</a>


                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-fw fa-trash"></i> Delete</button>
            </form>
        </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </main>
@endsection