<!DOCTYPE html>
<?php
session_start();
// print session login
if (!isset($_SESSION['admin'])) {
  //set error message
  $_SESSION['error'] = "You must login first";
  //redirect to login page
  header('location: ../auth/login.php');
}
include('../db/load.php');
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
    <div class="d-flex justify-content-between">
      <h1 class="mt-5">Pesan dari pengunjung</h1>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Email</th>
          <th scope="col">Telepon</th>
          <th scope="col">Subjek</th>
          <th scope="col">Pesan</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $ret = mysqli_query($db, "select * from pesan");
        $i = 1;
        while ($row = mysqli_fetch_array($ret)) { ?>
          <tr>
            <th scope="row"><?php echo $i++ ?></th>
            <td><?php echo $row['nama'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['telepon'] ?></td>
            <td><?php echo $row['subjek'] ?></td>
            <td><?php echo $row['pesan'] ?></td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>

    <a href="/admin" class="btn btn-primary float-right text-white mb-5">Kembali</a>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>