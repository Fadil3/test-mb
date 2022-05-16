<!DOCTYPE html>
<?php
session_start();
// print session login
if (!isset($_SESSION['admin'])) {
  //set error message
  $_SESSION['error'] = "You must login first";
  //redirect to login page
  header('location: admin/auth/login.php');
}
include('db/load.php');
$i = 0;
?>
<html lang="id">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />

  <link rel="stylesheet" href="style.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

  <title>Rumah Dekat MRT | MB Properti</title>
  <meta name="description" content="Perusahaan yang bergerak bidang pembangunan dan penjualan cluster perumahan" />
  <meta name="author" content="MB Properti" />
</head>

<body>
  <!--  display message -->
  <?php
  if (isset($_SESSION['error'])) {
    echo "<div class='alert alert-danger'>" . $_SESSION['error'] . "</div>";
    unset($_SESSION['error']);
  } else if (isset($_SESSION['success'])) {
    echo "<div class='alert alert-success'>" . $_SESSION['success'] . "</div>";
    unset($_SESSION['success']);
  }
  ?>
  <div class="container">
    <div class="text-center mx-auto mt-5">
      <h1 class="font-weight-bold">Panel Admin MB Properti</h1>
    </div>

    <div class="container mx-auto mt-5">
      <div class="row mx-auto">
        <div class="col-12 mx-auto text-center">
          <div class="d-flex justify-content-around">
            <div class="card" style="width: 18rem; height:fit-content;">
              <img src="assets/image/pesan.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Pesan dari pengunjung</h5>
                <p class="card-text">Berisi pesan yang dikirim oleh pengunjung dari form kontak kami.</p>
                <a class="btn btn-primary text-white" href="lihat-pesan.php" role="button">Lihat</a>
              </div>
            </div>
            <div class="card" style="width: 18rem; height:fit-content;">
              <img src="assets/image/seo-icon.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">SEO</h5>
                <p class="card-text">Berisi SEO yang digunakan untuk title, description, dan keywords</p>
                <a class="btn btn-success text-white" href="seo.php" role="button">Lihat</a>
              </div>
            </div>
            <div class="card" style="width: 18rem; height:fit-content;">
              <img src="assets/image/content.webp" class="card-img-top" alt="..." style="object-fit: cover;">
              <div class="card-body">
                <h5 class="card-title">Konten</h5>
                <p class="card-text">Berisi kontent yang ditampilkan di website</p>
                <a class="btn btn-secondary text-white" href="konten.php" role="button">Lihat</a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="container mx-auto mt-5">
      <div class="row mx-auto">
        <div class="col-6 mx-auto text-center">
          <div class="d-flex justify-content-around">
            <a href="logout.php" class="btn btn-danger float-right text-white mb-5">Logout</a>
          </div>
        </div>
      </div>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>