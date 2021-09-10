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
            <label id="kategori" for="nama" class="form-label">PILIH KATEGORI KUNJUNGAN :</label>
            <select id="Categorychoice" onChange="check(this);" class="form-select" aria-label="Default select example">
              <option selected>-- Pilih Kategori --</option>
              <option value="individu">Individu</option>
              <option value="rombongan">Rombongan</option>
            </select>
            </div>
              <div class="col-12 col-md-6 col-lg-6">
                <label for="nama" class="form-label">NAMA:</label>
                <input type="text" class="form-control @error ('nama') is-invalid @enderror" name="nama" placeholder="masukkan nama . . . . .">@error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
              </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-6">
                    <label for="nama" class="form-label">EMAIL:</label>
                  <input type="text" class="form-control @error ('email') is-invalid @enderror" name="Email" placeholder="masukkan email . . . . .">@error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <label for="nama" class="form-label">ALAMAT :</label>
                  <input  type="text" class="form-control @error ('alamat') is-invalid @enderror" name="alamat" placeholder="masukkan alamat . . . . .">@error('alamat')<div class="invalid-feedback">{{ $message }}</div>@enderror
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
                    <select class="form-select" type="option" id="waktu" placeholder="Pilih Sesi Kunjungan....." option="08.00 - 10.00 WIB">
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
                <label for="nama" class="form-label">NIK:</label>
                <input  type="text" class="form-control @error ('nik') is-invalid @enderror" name="nik" placeholder="masukkan nik . . . . .">@error('nik')<div class="invalid-feedback">{{ $message }}</div>@enderror
              </div>
       <div class="file mb-3" id="uploaddoc" style="display: none;">
        <label id="surat" for="formFileSm" class="form-label">Masukkan Surat Disini</label>
        <input class="form-control form-control-sm" id="formFileSm" type="file">
      </div>
      </div>
        </div>
        <div class="peringatan col-sm-6 justify-content-center">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">

                <label class="form-check-label" for="exampleCheck1">Pastikan Data Yang Anda Isikan Benar </label>
            <button href="/hasil" class="ya btn btn-primary mt-3">Submit</button>
    </div>
</form>
</div>
</main>

<script>

  function check() {
    var dropdown = document.getElementById("Categorychoice");
    var current_value = dropdown.options[dropdown.selectedIndex].value;
    console.log(current_value);

    if (current_value == "rombongan") {
        
        document.getElementById("uploaddoc").style.display = "block";
    }
    else {
        document.getElementById("uploaddoc").style.display = "none";
        
    }
}
</script>
@endsection