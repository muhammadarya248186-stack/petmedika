<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Antrian - PetMedika</title>

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

/* ANIMASI MASUK HALAMAN */
body {
  opacity: 0;
  transform: translateY(20px);
  animation: fadeIn 0.6s ease forwards;
}

@keyframes fadeIn {
  to {
    opacity: 1;
    transform: translateY(0);
  }
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

/* MENU */
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
  transition: 0.3s;
  padding: 10px 20px;
  border-radius: 15px;
}

/* HOVER MENU */
.menu a:hover {
  background: #d7ebe6;
  transform: scale(1.05);
}

/* ACTIVE */
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
  padding-top: 60px;
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

/* TITLE */
.title {
  text-align: center;
  z-index: 2;
}

.title h1 {
  font-size: 48px;
}

.title span {
  color: #2f8f59;
}

/* CARD WRAPPER */
.cards {
  margin-top: 40px;
  display: grid;
  grid-template-columns: repeat(2, 300px);
  gap: 30px;
  z-index: 2;
}

/* CARD */
.card {
  background: #e6e6e6;
  border-radius: 20px;
  padding: 25px;
  text-align: center;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  transition: 0.3s;
}

/* HOVER CARD */
.card:hover {
  transform: translateY(-10px) scale(1.03);
  box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}

.card h3 {
  font-size: 20px;
  margin-bottom: 5px;
}

.card p {
  font-size: 14px;
  margin-bottom: 20px;
}

.nomor {
  font-size: 70px;
  font-weight: bold;
  margin-bottom: 15px;
}

.status {
  font-size: 14px;
  color: #333;
}

/* card bawah tengah */
.card.full {
  grid-column: span 2;
  justify-self: center;
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
      <a class="active" href="daftar-antrian.php">Daftar <br>Antrian</a>
      <a href="kartu-antrian.php">Kartu <br>Antrian</a>
    </div>
  </div>

  <!-- MAIN -->
  <div class="main">

    <div class="title">
      <h1>Daftar <span>Antrian</span></h1>
    </div>

    <div class="cards">

      <div class="card">
        <h3>Nomor Antrian</h3>
        <p>Loket Vaksinasi</p>
        <div class="nomor">A-01</div>
        <div class="status">sedang dilayani</div>
      </div>

    </div>

    <div class="illustration">
      <img src="pet-illustration.png" />
    </div>

  </div>
</div>

<!-- TRANSISI PINDAH HALAMAN -->
<script>
document.querySelectorAll("a").forEach(link => {
  link.addEventListener("click", function(e) {
    const target = this.getAttribute("href");

    if (target && !target.startsWith("#")) {
      e.preventDefault();
      document.body.style.opacity = 0;
      document.body.style.transform = "translateY(20px)";

      setTimeout(() => {
        window.location.href = target;
      }, 300);
    }
  });
});
</script>

</body>
</html>