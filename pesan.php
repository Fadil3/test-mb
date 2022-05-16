<?php

include('dbconnection.php');

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
    //redirect to login page
    header('location: index.php');
  }