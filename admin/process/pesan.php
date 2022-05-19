<?php

include('../db/dbconnection.php');

if (isset($_POST['submit'])) {
  //set error message

  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $telepon = $_POST['telepon'];
  $subjek = $_POST['subjek'];
  $pesan = $_POST['pesan'];

  $sql = "INSERT INTO pesan(nama, email, telepon,subjek,pesan)
    VALUES ('$nama', '$email', '$telepon','$subjek','$pesan')";
  $result = mysqli_query($db, $sql);

  if ($result) {
    echo "<script>alert('Pesan anda telah terkirim');</script>";
    echo "<script>location.href='../../index.php';</script>";
  } else {
    echo "<script>alert('Pesan anda gagal terkirim');</script>";
    echo "<script>location.href='../../index.php';</script>";
  }
}
