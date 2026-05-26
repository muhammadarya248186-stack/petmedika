<?php
include "./config.php";

$q = mysqli_query($conn, "
  SELECT q.*, s.name, s.prefix 
  FROM queues q
  JOIN services s ON q.service_id = s.id
  ORDER BY q.id DESC
  LIMIT 1
");

$data = mysqli_fetch_assoc($q);

$nomor = $data ? $data['queue_number'] : 0;
$prefix = $data ? $data['prefix'] : '-';
$loket  = $data ? $data['name'] : '-';
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Kartu Antrian</title>
<link rel="stylesheet" href="style-pet.css">
</head>

<body>

<div class="container">
  <div class="sidebar">
    <div class="logo">
      <img src="image/logopet.png" />
    </div>

    <div class="menu">
      <a href="antrian.php">Ambil <br>Antrian</a>
      <a href="daftar-antrian.php">Daftar <br>Antrian</a>
      <a class="active" href="#">Kartu <br>Antrian</a>
    </div>
  </div>

  <div class="main">

    <div class="card-ticket">
      <h2>Kartu Antrian</h2>

      <p class="loket"><?= $loket; ?></p>

      <div class="nomor">
        <?= $prefix; ?>-<?= str_pad($nomor, 2, '0', STR_PAD_LEFT); ?>
      </div>

      <p class="info">Silakan menunggu hingga nomor dipanggil</p>

    </div>

    <div class="illustration">
      <img src="pet-illustration.png" />
    </div>

  </div>
</div>

</body>
</html>