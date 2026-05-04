<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Antrian - PetMedika</title>

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

.container {
  display: flex;
  height: 100vh;
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

.logo img {
  width: 200px;
  margin-bottom: 40px;
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
  padding: 10px 20px;
  border-radius: 15px;
  transition: 0.3s;
}

.menu a:hover {
  background: #d7ebe6;
  transform: scale(1.05);
}

.menu .active {
  background: #b9d7bf;
}

/* MAIN */
.main {
  flex: 1;
  background: #9fd3cb;
  position: relative;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

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

/* KARTU */
.card-ticket {
  width: 380px;
  background: white;
  border-radius: 20px;
  padding: 30px;
  text-align: center;
  z-index: 2;
  box-shadow: 0 10px 25px rgba(0,0,0,0.2);
  animation: pop 0.5s ease;
}

@keyframes pop {
  from {
    transform: scale(0.8);
    opacity: 0;
  }
  to {
    transform: scale(1);
    opacity: 1;
  }
}

.card-ticket h2 {
  margin-bottom: 10px;
}

.loket {
  font-size: 14px;
  margin-bottom: 20px;
}

.nomor {
  font-size: 80px;
  font-weight: bold;
  margin: 20px 0;
  color: #2f8f59;
}

.info {
  font-size: 14px;
  margin-top: 10px;
}

/* BUTTON */
.btn-print {
  margin-top: 25px;
  background: #8fcdb8;
  border: 2px solid #3a6f63;
  padding: 12px;
  border-radius: 10px;
  cursor: pointer;
  font-weight: 600;
  transition: 0.3s;
}

.btn-print:hover {
  transform: scale(1.05);
  background: #7bbda7;
}

/* ILLUSTRATION */
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
      <img src="image/logopet.png" />
    </div>

    <div class="menu">
      <a href="antrian.php">Ambil <br>Antrian</a>
      <a href="daftar-antrian.php">Daftar <br>Antrian</a>
      <a class="active" href="kartu-antrian.html">Kartu <br>Antrian</a>
    </div>
  </div>

  <!-- MAIN -->
  <div class="main">

    <!-- KARTU -->
    <div class="card-ticket">
      <h2>Kartu Antrian</h2>
      <p class="loket">Loket Vaksinasi</p>

      <div class="nomor">A-01</div>

      <p class="info">Silakan menunggu hingga nomor dipanggil</p>

      <button class="btn-print" onclick="window.print()">Print</button>
    </div>

    <div class="illustration">
      <img src="pet-illustration.png" />
    </div>

  </div>
</div>

</body>
</html>