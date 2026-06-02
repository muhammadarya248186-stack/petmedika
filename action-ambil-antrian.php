<?php
session_start();
include "./config.php";

if(isset($_POST['service_id'])){

  $no_telp = $_POST['no_telp'];
  $service_id = $_POST['service_id'];
  $tanggal = date('Y-m-d');

  // Simpan nomor telepon di session hanya untuk membantu filter kartu.
  // Tidak mengubah struktur database.
  $_SESSION['last_no_telp'] = $no_telp;

  // ambil nomor terakhir per loket & tanggal
  $cek = mysqli_query($conn, "
    SELECT MAX(queue_number) as last 
    FROM queues 
    WHERE service_id='$service_id' 
    AND appointment_date='$tanggal'
  ");

  $data = mysqli_fetch_assoc($cek);
  $last = $data['last'];

  $nomor = $last ? $last + 1 : 1;

  // insert (SUDAH ADA created_at)
  mysqli_query($conn, "
    INSERT INTO queues 
    (service_id, visitor_phone, queue_number, appointment_date, status, created_at)
    VALUES 
    ('$service_id', '$no_telp', '$nomor', '$tanggal', 'waiting', NOW())
  ");

  // Setelah ambil antrian, pindah ke halaman kartu.
  // kartu-antrian.php akan menampilkan semua antrian hari ini.
  header("Location: kartu-antrian.php");
  exit;
}
?>
