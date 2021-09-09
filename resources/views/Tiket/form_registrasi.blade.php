@extends('layouts.tiket')

@section ('tiket')
<main>
      <!-- <div class="text">
            <h3 class="text-center"> BOOKING MUSEUM BLAMBANGAN</h3>
       </div> -->
<div class="container">
       <div class="text">
            <h3 class="text-center"> BOOKING MUSEUM BLAMBANGAN</h3>
       </div>
    <!-- <div class="row justify-content-center"> -->
        <div class="container">
        <form method="POST" action="/hasil">
            @csrf
            <div class="row justify-content-center">
              <div class="col-12 col-md-6 col-lg-6">
                <label for="nama" class="form-label">NAMA:</label>
                <input type="text" class="form-control @error ('nama') is-invalid @enderror" name="nama" placeholder="masukkan nama . . . . .">@error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
              </div>
              <div class="col-12 col-md-6 col-lg-6">
                <label for="nama" class="form-label">NIK:</label>
                <input  type="text" class="form-control" name="nik" placeholder="masukkan nik . . . . .">
              </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-6">
                    <label for="nama" class="form-label">EMAIL:</label>
                  <input type="text" class="form-control" name="Email" placeholder="masukkan email . . . . .">
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <label for="nama" class="form-label">ALAMAT :</label>
                  <input  type="text" class="form-control" name="alamat" placeholder="masukkan alamat . . . . .">
                </div>
              </div>


              <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-6">
                  <div class="row">         
                <div class="form-group col-md-3">
                    <label for="nama" class="form-label">BERKUNJUNG PADA:</label>
                  <input type="date" class="form-control" id="tanggal" placeholder="pilih tanggal kunjungan . . . . .">
                </div>
                <div class="form-group col-md-3">
                     <label for="nama" class="form-label">PILIH SESI KUNJUNGAN :</label>
                    <select class="form-control" type="option" id="waktu" placeholder="Pilih Sesi Kunjungan....." option="08.00 - 10.00 WIB">
                        <optgroup label="Pilih Sesi Kunjungan">
                            <option value="">08.00 - 10.00 WIB</option>
                            <option value="">10.00 - 12.00 WIB</option>
                            <option value="">13.00 - 15.00 WIB</option>
                        </optgroup>
                    </select>
                </div>
              </div>
          </div>
          <div class="col-12 col-md-6 col-lg-6">
            <label for="nama" class="form-label">PILIH KATEGORI KUNJUNGAN :</label>
           <select class="form-control" type="option" name="inovasi" placeholder="Pilih Kategori Kunjungan....." option="08.00 - 10.00 WIB">
               <optgroup label="Pilih Kategori Kunjungan">
                   <option value="">INDIVIDU</option>
                   <option value="">ROMBONGAN</option>
                   
               </optgroup>
           </select>
       </div>
       <div class="file mb-3">
        <label for="formFileSm" class="form-label">Masukkan Surat Disini</label>
        <input class="form-control form-control-sm" id="formFileSm" type="file">
      </div>
      </div>
        </div>
        <div class="peringatan col-sm-6 justify-content-center">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">

                <label class="form-check-label" for="exampleCheck1">Pastikan Data Yang Anda Isikan Benar </label>
            <button type="submit" class="ya btn btn-primary mt-3">Submit</button>
    </div>
</form>
</div>
</main>
@endsection