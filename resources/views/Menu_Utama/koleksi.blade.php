@extends('layouts.main')

@section('container')
<section id="koleksi">
         
            <div class="gallery mt-5">
              <br>
              <div class="text-center">KOLEKSI</div>
              <br>
              <br>
              <div class="card">
                  <div class="card-image1"></div>
                  <div class="card-text">
                      <!-- <div class="jenis">Prasejarah</div> -->
                      <p>Alat batu yang berasal dari periode neolitik (3500 SM). Beliung ini telah diserpih, diupam, dan memiliki bidang tajam.
                      </p>
                  </div>
                  <div class="card-stats1">
                      <div class="stat">
                          <a class="btn" href="/prasejarah">Prasejarah</a>
                      </div>
                  </div> 
              </div>
              <div class="card">
                  <div class="card-image2"></div>
                  <div class="card-text">
                      <!-- <div class="jenis">Hindu-Budha</div> -->
                      <p>
                          PADUKA BHATTARA, Penguasa pertama ujung Timur Jawa (Blambangan) yaitu Sri Nagarawardhani. Berselang beberapa tahun Sri Nagarwardhani pindah tugas sehingga pemerintahan Blambangan diserahkan suaminya yang juga bergelar Paduka Bhattara Wirabumi.
                      </p>
                  </div>
                  <div class="card-stats2">
                      <div class="stat">
                          <a class="btn" href="/hindu-budha">Hindu-Budha</a>
                      </div>
                  </div> 
              </div>
              <div class="card">
                  <div class="card-image3"></div>
                  <div class="card-text">
                      <!-- <div class="jenis">Islam</div> -->
                      <p>Kitab beraksara Arab dan berbahasa campuran Arab dan Jawa. Berisi tentang pernikahan, haji, dan aturan lainnya terkait keislaman.
                      </p>
                  </div>
                  <div class="card-stats3">
                      <div class="stat">
                          <a class="btn" href="/islam">Islam</a>
                      </div>
                  </div> 
              </div>



              <div class="card">
                  <div class="card-image4"></div>
                  <div class="card-text">
                      <!-- <div class="jenis">Kolonial</div> -->
                      <p>Mesin Tik merek Halda. Diproduksi oleh N.V. G.Kolff di Batavia tahun 1848.
                      </p>
                  </div>
                  <div class="card-stats4">
                      <div class="stat">
                          <a class="btn"href="/kolonial">Kolonial</a>
                      </div>
                  </div> 
              </div>
          </div>
</section>
@endsection