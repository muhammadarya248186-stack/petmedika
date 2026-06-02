<?php
session_start();
include "./config.php";

// REVISI 7:
// Tampilkan SEMUA kartu antrian hari ini, tidak difilter nomor HP/session.
// Jadi walaupun user mengambil antrian dengan nomor HP berbeda, semua tetap muncul.
$q = mysqli_query($conn, "
  SELECT q.*, s.name, s.prefix 
  FROM queues q
  JOIN services s ON q.service_id = s.id
  WHERE q.appointment_date = CURDATE()
  ORDER BY q.id DESC
");

if(!$q){
  die("Query error: " . mysqli_error($conn));
}

function getStatusData($status){
  $status = strtolower($status);

  if ($status == 'waiting') {
    return ['Silakan menunggu hingga nomor dipanggil', 'waiting'];
  } elseif ($status == 'called' || $status == 'dipanggil') {
    return ['Nomor antrian sedang dipanggil', 'called'];
  } elseif ($status == 'done' || $status == 'selesai') {
    return ['Antrian sudah selesai', 'done'];
  } elseif ($status == 'cancelled' || $status == 'canceled' || $status == 'batal') {
    return ['Antrian dibatalkan', 'cancelled'];
  } else {
    return [ucfirst($status), 'waiting'];
  }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kartu Antrian</title>
<link rel="stylesheet" href="style-pet.css">
</head>

<body>

<div class="container">
  <div class="sidebar">
    <div class="logo">
      <img src="image/logopet.png" alt="Logo PetMedika" />
    </div>

    <div class="menu">
      <a href="antrian.php">Ambil <br>Antrian</a>
      <a href="daftar-antrian.php">Daftar <br>Antrian</a>
      <a class="active" href="kartu-antrian.php">Kartu <br>Antrian</a>
    </div>
  </div>

  <div class="main clean-main">

    <div class="ticket-list">
      <?php if(mysqli_num_rows($q) > 0): ?>
        <?php while($data = mysqli_fetch_assoc($q)): ?>
          <?php
            $nomor = $data['queue_number'];
            $prefix = $data['prefix'];
            $loket  = $data['name'];
            $no_telp = $data['visitor_phone'];
            list($statusText, $statusClass) = getStatusData($data['status']);
          ?>

          <div class="card-ticket">
            <img class="ticket-logo" src="image/logopet.png" alt="Logo PetMedika">
            <h2>Kartu Antrian</h2>

            <p class="loket"><?= htmlspecialchars($loket); ?></p>
            <p class="phone-ticket">No. Telp: <?= htmlspecialchars($no_telp); ?></p>

            <div class="nomor">
              <?= htmlspecialchars($prefix); ?>-<?= str_pad($nomor, 2, '0', STR_PAD_LEFT); ?>
            </div>

            <p class="info <?= $statusClass; ?>"><?= $statusText; ?></p>
          </div>

        <?php endwhile; ?>
      <?php else: ?>
        <div class="card-ticket empty-ticket">
          <img class="ticket-logo" src="image/logopet.png" alt="Logo PetMedika">
          <h2>Belum Ada Kartu</h2>
          <p class="info waiting">Silakan ambil antrian terlebih dahulu.</p>
        </div>
      <?php endif; ?>
    </div>

  </div>
</div>

</body>
</html>
