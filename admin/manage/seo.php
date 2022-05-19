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
      <h1 class="mt-5">SEO</h1>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <form action="/admin/process/update-seo.php" method="post">
              <div class="form-group">
                <label for="exampleFormControlTextarea1"><b>Title</b></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="title" required><?php echo $seo['title']; ?></textarea>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1"><b>Description</b></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="description" required><?php echo $seo['description']; ?></textarea>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1"><b>Keyword yang ditargetkan (pisahkan dengan , untuk setiap keyword)</b></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="keyword" required><?php echo $seo['keyword']; ?></textarea>
              </div>
              <div class="mx-auto text-center">
                <button type="submit" class="btn btn-success">Update SEO</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="mx-auto text-center my-3">
        <a href="/admin" class="btn btn-primary float-right text-white mb-5 text-center">Kembali</a>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>