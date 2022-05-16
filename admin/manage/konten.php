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
include('admin/db/load.php');
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
    <!-- daftar konten -->
    <div class="d-flex justify-content-between">
      <h1 class="mt-5">CMS MB Properti</h1>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Section</th>
          <th scope="col">Deskripsi</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Navbar</td>
          <td>Logo pada navbar dan link</td>
          <td>
            <a class="btn btn-primary text-white" href="admin/process/update-content.php?konten=navbar" role="button">Edit</a>
          </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Konten-1</td>
          <td>Tampilan Utama dan Keunggulan</td>
          <td>
            <a class="btn btn-primary text-white" href="admin/process/update-content.php?konten=konten-1" role="button">Edit</a>
          </td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Konten-2</td>
          <td>Promo Bulan Ini</td>
          <td>
            <a class="btn btn-primary text-white" href="admin/process/update-content.php?konten=konten-2" role="button">Edit</a>
          </td>
        </tr>
        <tr>
          <th scope="row">4</th>
          <td>Konten-3</td>
          <td>Unit dan Fasilitas yang ditawarkan</td>
          <td> <a class="btn btn-primary text-white" href="admin/process/update-content.php?konten=konten-3" role="button">Edit</a></td>
        </tr>
        <tr>
          <th scope="row">5</th>
          <td>Konten-4</td>
          <td>Cluster-Cluster yang Tersedia</td>
          <td> <a class="btn btn-primary text-white" href="admin/process/update-content.php?konten=konten-4" role="button">Edit</a></td>
        </tr>
        <tr>
          <th scope="row">6</th>
          <td>Konten-5</td>
          <td>Mengapa Membeli Rumah Di Kami</td>
          <td> <a class="btn btn-primary text-white" href="admin/process/update-content.php?konten=konten-5" role="button">Edit</a></td>
        </tr>
        <tr>
          <th scope="row">7</th>
          <td>Konten-5a</td>
          <td>Galeri</td>
          <td> <a class="btn btn-primary text-white" href="admin/process/update-content.php?konten=konten-5a" role="button">Edit</a></td>
        </tr>
        <tr>
          <th scope="row">8</th>
          <td>youtube</td>
          <td>Link-link youtube di galeri</td>
          <td> <a class="btn btn-primary text-white" href="admin/process/update-content.php?konten=youtube" role="button">Edit</a></td>
        </tr>
        <tr>
          <th scope="row">7</th>
          <td>Konten-6</td>
          <td>SPESIFIKASI BANGUNAN</td>
          <td> <a class="btn btn-primary text-white" href="admin/process/update-content.php?konten=konten-6" role="button">Edit</a></td>
        </tr>
        <tr>
          <th scope="row">8</th>
          <td>Konten-7</td>
          <td>Dapatkan Promo PPKM Bulan Ini</td>
          <td> <a class="btn btn-primary text-white" href="admin/process/update-content.php?konten=konten-7" role="button">Edit</a></td>
        </tr>
        <tr>
          <th scope="row">9</th>
          <td>Konten-8</td>
          <td>FAQ yang berisi pertanyaan dan jawaban yang sering ditanya konsumen</td>
          <td>
            <a class="btn btn-primary text-white" href="admin/process/update-content.php?konten=konten-8" role="button">Edit</a>
          </td>
        </tr>
        <tr>
          <th scope="row">10</th>
          <td>Konten-8a</td>
          <td>Daftar - Harga</td>
          <td>
            <a class="btn btn-primary text-white" href="admin/process/update-content.php?konten=konten-8" role="button">Edit</a>
          </td>
        </tr>
        <tr>
          <th scope="row">11</th>
          <td>Footer</td>
          <td>text pada footer</td>
          <td> <a class="btn btn-primary text-white" href="admin/process/update-content.php?konten=footer" role="button">Edit</a></td>
        </tr>
        <tr>
          <th scope="row">12</th>
          <td>Sosmed</td>
          <td>Link-link sosial media yang berada di footer</td>
          <td> <a class="btn btn-primary text-white" href="admin/process/update-content.php?konten=sosmed" role="button">Edit</a></td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="container mx-auto mt-5">
    <div class="row mx-auto">
      <div class="col-6 mx-auto text-center">
        <div class="d-flex justify-content-around">
          <a href="admin/index.php" class="btn btn-primary float-right text-white mb-5">Kembali</a>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>