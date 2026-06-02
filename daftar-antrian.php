<?php
include "./config.php";

$q = mysqli_query($conn, "
  SELECT q.*, s.name, s.prefix 
  FROM queues q
  JOIN services s ON q.service_id = s.id
  WHERE q.appointment_date = CURDATE()
  ORDER BY q.queue_number ASC
");

if(!$q){
  die("Query error: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Daftar Antrian</title>
<link rel="stylesheet" href="style-pet.css">
<meta http-equiv="refresh" content="5">
</head>

<body>

<div class="container">

  <div class="sidebar">
    <div class="logo">
      <img src="image/logopet.png" alt="Logo PetMedika">
    </div>

    <div class="menu">
      <a href="antrian.php">Ambil <br>Antrian</a>
      <a class="active" href="daftar-antrian.php">Daftar <br>Antrian</a>
      <a href="kartu-antrian.php">Kartu <br>Antrian</a>
    </div>
  </div>

  <div class="main">

    <div class="title">
      <h1>Daftar <span>Antrian</span></h1>
      <p class="subtitle">Data antrian hari ini diperbarui otomatis</p>
    </div>

    <div class="cards">

      <?php if(mysqli_num_rows($q) > 0): ?>
        <?php while($row = mysqli_fetch_assoc($q)): ?>

          <div class="card">
            <h3>Nomor Antrian</h3>

            <p><?= $row['name']; ?></p>

            <div class="nomor">
              <?= $row['prefix']; ?>-<?= str_pad($row['queue_number'], 2, '0', STR_PAD_LEFT); ?>
            </div>

            <?php
              $status = strtolower($row['status']);
              if ($status == 'waiting') {
                $statusText = 'Menunggu';
                $statusClass = 'waiting';
              } elseif ($status == 'called' || $status == 'dipanggil') {
                $statusText = 'Dipanggil';
                $statusClass = 'called';
              } elseif ($status == 'done' || $status == 'selesai') {
                $statusText = 'Selesai';
                $statusClass = 'done';
              } elseif ($status == 'cancelled' || $status == 'canceled' || $status == 'batal') {
                $statusText = 'Dibatalkan';
                $statusClass = 'cancelled';
              } else {
                $statusText = ucfirst($status);
                $statusClass = 'waiting';
              }
            ?>
            <div class="status <?= $statusClass; ?>">
              <?= $statusText; ?>
            </div>
          </div>

        <?php endwhile; ?>
      <?php else: ?>

        <div class="card full">
          <h3>Belum ada antrian</h3>
        </div>

      <?php endif; ?>

    </div>


  </div>
</div>

</body>
</html>
