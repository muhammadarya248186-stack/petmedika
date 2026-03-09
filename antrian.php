<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <title>PetMedika</title>

    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
      }

      body {
        background: #f2f2f2;
      }

      /* CONTAINER */
      .container {
        display: flex;
        height: 100vh;
        width: 100%;
      }

      /* SIDEBAR */
      .sidebar {
        width: 260px;
        background: #b8cfd3;
        border-right: 2px solid #9fb5b9;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding-top: 30px;
      }

      .logo {
        text-align: center;
        margin-bottom: 40px;
      }

      .logo img {
        width: 70px;
      }

      .logo h2 {
        color: #2f8f59;
        font-weight: bold;
      }

      .menu {
        display: flex;
        flex-direction: column;
        gap: 35px;
        font-size: 22px;
        font-weight: 600;
        text-align: center;
      }

      .menu a {
        text-decoration: none;
        color: #000;
      }

      .menu .active {
        background: #b9d7bf;
        padding: 12px 25px;
        border-radius: 20px;
      }

      /* MAIN CONTENT */
      .main {
        flex: 1;
        background: #9fd3cb;
        position: relative;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding-top: 70px;
      }

      /* background shape kanan */
      .main::after {
        content: "";
        position: absolute;
        right: -200px;
        top: -150px;
        width: 700px;
        height: 900px;
        background: #e6e6e6;
        border-radius: 50%;
      }

      /* TITLE */
      .title {
        text-align: center;
        z-index: 2;
      }

      .title h1 {
        font-size: 48px;
        letter-spacing: 2px;
      }

      .title h1 span {
        color: #2f8f59;
      }

      .subtitle {
        margin-top: 8px;
        font-size: 14px;
      }

      /* FORM */
      .form {
        margin-top: 40px;
        width: 400px;
        display: flex;
        flex-direction: column;
        gap: 18px;
        z-index: 2;
      }

      label {
        font-size: 13px;
      }

      input,
      select {
        width: 100%;
        padding: 12px;
        border-radius: 8px;
        border: 2px solid #6f6f6f;
        font-size: 14px;
      }

      /* BUTTON */
      .btn {
        margin-top: 10px;
        background: #8fcdb8;
        border: 2px solid #3a6f63;
        padding: 12px;
        border-radius: 10px;
        cursor: pointer;
        font-weight: 600;
      }

      /* ILLUSTRATION AREA */
      .illustration {
        position: absolute;
        bottom: 0;
        left: 200px;
        z-index: 1;
        opacity: 0.9;
      }

      .illustration img {
        width: 420px;
      }
    </style>
  </head>

  <body>
    <div class="container">
      <!-- SIDEBAR -->
      <div class="sidebar">
        <div class="logo">
          <img src="logo.png" />
          <h2>PetMedika</h2>
        </div>

        <div class="menu">
          <a class="active">Ambil <br />Antrian</a>
          <a>Daftar <br />Antrian</a>
          <a>Kartu <br />Antrian</a>
        </div>
      </div>

      <!-- MAIN -->
      <div class="main">
        <div class="title">
          <h1>Welcome To <br /><span>PetMedika</span></h1>
          <p class="subtitle">Solusi Kesehatan Hewan Terpercaya</p>
        </div>

        <div class="form">
          <div>
            <label>Nomor Telepon</label>
            <input type="text" placeholder="Masukkan No. Telp Anda" />
          </div>

          <div>
            <label>Loket</label>
            <select>
              <option>Pilih Loket</option>
              <option>Loket 1</option>
              <option>Loket 2</option>
            </select>
          </div>

          <button class="btn">Ambil Antrian</button>
        </div>

        <div class="illustration">
          <img src="pet-illustration.png" />
        </div>
      </div>
    </div>
  </body>
</html>
