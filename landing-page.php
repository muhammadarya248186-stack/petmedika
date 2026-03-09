<?php

?>

<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PetMedika</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        font-family: Arial, sans-serif;
        display: flex;
        height: 100vh;
        background-color: #f0fdf4;
      }

      /* ===== SIDEBAR ===== */
      .sidebar {
        width: 180px;
        background-color: #d8f3e6;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 24px 12px;
      }

      .sidebar .logo {
        margin-bottom: 32px;
        padding-bottom: 20px;
      }

      .sidebar .logo img {
        width: 150px;
      }

      .sidebar nav {
        display: flex;
        flex-direction: column;
        gap: 8px;
        width: 100%;
      }

      .sidebar nav a {
        display: block;
        text-align: center;
        padding: 14px 10px;
        border-radius: 10px;
        text-decoration: none;
        font-weight: bold;
        font-size: 15px;
        color: #1a3a26;
      }

      .sidebar nav a.active {
        background-color: #c8ecd2;
        color: black;
      }

      .sidebar nav a:hover {
        background-color: #b2e8cc;
      }

      /* ===== MAIN CONTENT ===== */
      .main {
        flex: 1;
        background-color: #e6faf0;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 48px 24px 0;
        position: relative;
        overflow: hidden;
      }

      .main h2 {
        font-size: 32px;
        font-weight: bold;
        color: #1a3a26;
      }

      .main h1 {
        font-size: 38px;
        font-weight: 900;
        margin-bottom: 4px;
      }

      .main h1 span.pet {
        color: #2b943b;
      }

      .main h1 span.medika {
        color: #525c68;
      }

      .main .tagline {
        font-size: 14px;
        color: black;
        margin-bottom: 32px;
        padding-bottom: 35px;
      }

      /* ===== FORM ===== */

      .form-box label {
        display: block;
        font-size: 14px;
        font-weight: 600;
        color: #1a3a26;
        margin-bottom: 6px;
      }

      .form-box input,
      .form-box select {
        width: 100%;
        padding: 6px 50px;
        border: 1.5px solid #c8e6d4;
        border-radius: 8px;
        font-size: 14px;
        color: #333;
        background-color: #f7fdf9;
        margin-bottom: 18px;
        outline: none;
      }

      .form-box input:focus,
      .form-box select:focus {
        border-color: #3dba6f;
      }

      .form-box input::placeholder {
        color: #aac8b4;
        padding-right: 20px;
      }

      .form-box select {
        color: #aac8b4;
        appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='14' height='14' viewBox='0 0 24 24' fill='none' stroke='%233dba6f' stroke-width='2.5'%3E%3Cpolyline points='6 9 12 15 18 9'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 14px center;
      }

      .form-box button {
        width: 100%;
        padding: 9px;
        background-color: #a1efd9;
        color: white;
        font-size: 16px;
        font-weight: bold;
        border: none;
        border-radius: 18px;
        cursor: pointer;
      }

      .form-box button:hover {
        background-color: #72b9a5;
      }

      /* ===== GAMBAR BAWAH ===== */
      .bottom-image {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 60%;
      }

      .bottom-image img {
        width: 100%;
        max-height: 260px;
        object-fit: cover;
        object-position: top;
      }
    </style>
  </head>
  <body>
    <!-- SIDEBAR -->
    <aside class="sidebar">
      <div class="logo">
        <img src="logopet.png" alt="PetMedika Logo" />
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

      <div class="bottom-image">
        <img src="ase.png" alt="Ilustrasi PetMedika" />
      </div>
    </main>
  </body>
</html>
