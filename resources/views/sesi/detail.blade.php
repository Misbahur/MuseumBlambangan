@extends('adminlte::page')
  
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail Sesi
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    @foreach ($sesi as $item)
                    <li class="list-group-item"><b>Nama Sesi: </b>{{$item->nama_sesi}}</li>
                    <li class="list-group-item"><b>Waktu: </b>{{$item->waktu}}</li>
                    <li class="list-group-item"><b>Deskripsi: </b>{{$item->deskripsi}}</li>
                    @endforeach
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('sesi.index') }}">Kembali</a>

        </div>
    </div>
</div>
@endsection