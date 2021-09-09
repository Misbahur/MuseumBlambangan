@extends('layouts.tiket')

@section ('tiket')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3>www.malasngoding.com</h3>
                        <h3 class="my-4">Data Yang Di Input : </h3>
 
                        <table class="table table-bordered table-striped">
                            @foreach
                            <tr>
                                <td style="width:150px">Nama</td>
                                <td>{{ $datapengunjung->nama }}</td>
                            </tr>
                            <tr>
                                <td>NIK</td>
                                <td>{{ $datapengunjung->nik }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $datapengunjung->email }}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>{{ $datapengunjung->alamat }}</td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td>{{ $datapengunjung->tanggal }}</td>
                            </tr>
                            <tr>
                                <td>Sesi</td>
                                <td>{{ $datapengunjung->sesi }}</td>
                            </tr>
                            <tr>
                                <td>Kategori</td>
                                <td>{{ $datapengunjung->kategori }}</td>
                            </tr>
                        </table>
 
                        <a href="/input" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection