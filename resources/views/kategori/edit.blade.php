@extends('adminlte::page')
  
@section('content')
   
<div class="container mt-5">
   
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Edit Kategori
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
            @foreach ($kategori as $item )
            <form method="post" action="{{ url('kategori/'.$item->id) }}" id="myForm">
            @method('PUT')
            @csrf
                <div class="form-group">
                    <label for="name">Kategori</label>                    
                    <input type="text" name="Kategori" class="form-control" id="name" value="{{ $item->Kategori }}">                
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection