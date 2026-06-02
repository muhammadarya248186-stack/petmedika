<?php
include "./config.php";

$query = "SELECT * FROM services WHERE is_active = 1";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PetMedika</title>
<link rel="stylesheet" href="style-pet.css">
</head>

<body>
<div class="container">

  <div class="sidebar">
    <div class="logo">
      <img src="image/logopet.png" alt="Logo PetMedika">
    </div>

    <div class="menu">
      <a class="active" href="antrian.php">Ambil <br>Antrian</a>
      <a href="daftar-antrian.php">Daftar <br>Antrian</a>
      <a href="kartu-antrian.php">Kartu <br>Antrian</a>
    </div>
  </div>

  <div class="main clean-main">
    <div class="title">
      <h1>Welcome To <br><span>PetMedika</span></h1>
      <p class="subtitle">Solusi Kesehatan Hewan Terpercaya</p>
    </div>

    <form class="form" method="POST" action="action-ambil-antrian.php">
      <img class="form-logo" src="image/logopet.png" alt="Logo PetMedika">

      <input type="text" name="no_telp" placeholder="Masukkan No. Telp Anda">

      <select name="service_id">
        <option value="">Pilih Loket</option>
        <?php while($row = mysqli_fetch_assoc($result)): ?>
          <option value="<?= $row['id']; ?>">
            <?= $row['name']; ?>
          </option>
        <?php endwhile; ?>
      </select>

      <button class="btn">Ambil Antrian</button>
    </form>
  </div>

</div>
</body>
</html>
