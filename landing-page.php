<?php

?>

<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PetMedika</title>
    <link rel="stylesheet" href="style-landing-page.css">
  </head>
  <body>
    <!-- SIDEBAR -->
    <aside class="sidebar">
      <div class="logo">
        <img src="image/logopet.png" alt="PetMedika Logo" />
        <hr />
      </div>

      <nav>
        <a href="#" class="active">Ambil<br />Antrian</a>
        <a href="#">Daftar<br />Antrian</a>
        <a href="#">Kartu<br />Antrian</a>
      </nav>
    </aside>

    <!-- MAIN -->
    <main class="main">
      <h2>Welcome To</h2>
      <h1><span class="pet">Pet</span><span class="medika">Medika</span></h1>
      <p class="tagline">Solusi Kesehatan Hewan Terpercaya</p>

      <div class="bottom-image">
        <img src="image/aset1.png" alt="Ilustrasi PetMedika" />
      </div> 
      <!-- FORM -->
      <div class="form-box">
        <label>Nomor Telepon</label>
        <input type="tel" placeholder="Masukkan No. Telp Anda" />

        <label>Loket</label>
        <select>
          <option value="" disabled selected>Silahkan Pilih Loket</option>
          <option value="1">Loket Grooming</option>
          <option value="2">Loket Vaksinasi</option>
          <option value="3">Loket Operasi</option>
        </select>

        <button>Ambil Antrian</button>
      </div>

      
    </main>
  </body>
</html>
