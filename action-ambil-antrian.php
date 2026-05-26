<?php
include "./config.php";

if(isset($_POST['service_id'])){

  $no_telp = $_POST['no_telp'];
  $service_id = $_POST['service_id'];
  $tanggal = date('Y-m-d');

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

  header("Location: kartu-antrian.php");
  exit;
}
?>