@extends('adminlte::page')
  
@section('content')
   
<div class="container mt-5">
   
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Edit Sesi
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
            @foreach ($sesi as $item )
            <form method="post" action="{{ url('sesi/'.$item->id) }}" id="myForm">
            @method('PUT')
            @csrf
                <div class="form-group">
                    <label for="name">Nama Sesi</label>                    
                    <input type="text" name="nama_sesi" class="form-control" id="name" value="{{ $item->nama_sesi }}">                
                </div>
                <div class="form-group">
                    <label for="email">Waktu</label>                    
                    <input type="text" name="waktu" class="form-control" id="email" value="{{ $item->waktu }}">                
                </div>
                <div class="form-group">
                    <label for="writer">Deskripsi</label>                    
                    <input type="text" name="deskripsi" class="form-control" id="password" value="{{ $item->deskripsi }}">                
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection