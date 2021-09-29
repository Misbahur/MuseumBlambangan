@extends('adminlte::page')

@section('content')
<div class="container mt-5">
   
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <a class="btn btn-success mt-3 mb-5" href="{{ url('sesi') }}">Kembali</a>
            <div class="card-header">
            Tambah Sesi
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('sesi.store') }}" id="myForm">
            @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>                    
                    <input type="text" name="nama_sesi" class="form-control" id="name" >                
                </div>
                <div class="form-group">
                    <label for="email">Waktu</label>                    
                    <input type="text" name="waktu" class="form-control" id="email" >                
                </div>
                <div class="form-group">
                    <label for="password">Deskripsi</label>                    
                    <input type="text" name="deskripsi" class="form-control" id="password">                
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
    </div>
@endsection