@extends('adminlte::page')

@section('content')
<main>
    <div class="text">
      <h5 class="text-center">Kategori Kunjungan</h5>
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
            <form action="{{ route('kategori.destroy',$kategori->id) }}" method="POST">

                <a class="btn btn-info btn-sm" href="{{ route('kategori.show',$kategori->id) }}">Show</a>

                <a class="btn btn-primary btn-sm" href="{{ route('kategori.edit',$kategori->id) }}">Edit</a>

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