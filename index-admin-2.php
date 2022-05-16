<!DOCTYPE html>
<?php
session_start();
// print session login
if (!isset($_SESSION['admin'])) {
  //set error message
  $_SESSION['error'] = "You must login first";
  //redirect to login page
  header('location: login.php');
}
include('load.php');
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
            <form action="update-seo.php" method="post">
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
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>

      <!-- daftar konten -->
      <div class="d-flex justify-content-between">
        <h1 class="mt-5">CMS MB Properti</h1>
      </div>

      <table class="table">
        <!-- <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Section</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead> -->
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Pesan</td>
            <td>Melihat Pesan yang Dikirim Customer</td>
            <td>
              <a class="btn btn-primary text-white" href="lihat-pesan.php" role="button">Lihat</a>
            </td>
          </tr>
           
        </tbody>
      </table>

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
              <a class="btn btn-primary text-white" href="update-content.php?konten=navbar" role="button">Edit</a>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Konten-1</td>
            <td>Thornton</td>
            <td>
              <a class="btn btn-primary text-white" href="update-content.php?konten=konten-1" role="button">Edit</a>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Konten-2</td>
            <td>the Bird</td>
            <td>
              <a class="btn btn-primary text-white" href="update-content.php?konten=konten-2" role="button">Edit</a>
            </td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Konten-3</td>
            <td>the Bird</td>
            <td> <a class="btn btn-primary text-white" href="update-content.php?konten=konten-3" role="button">Edit</a></td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Konten-4</td>
            <td>the Bird</td>
            <td> <a class="btn btn-primary text-white" href="update-content.php?konten=konten-4" role="button">Edit</a></td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>Konten-5</td>
            <td>the Bird</td>
            <td> <a class="btn btn-primary text-white" href="update-content.php?konten=konten-5" role="button">Edit</a></td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>Konten-5a</td>
            <td>the Bird</td>
            <td> <a class="btn btn-primary text-white" href="update-content.php?konten=konten-5a" role="button">Edit</a></td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>youtube</td>
            <td>the Bird</td>
            <td> <a class="btn btn-primary text-white" href="update-content.php?konten=youtube" role="button">Edit</a></td>
          </tr>
          <tr>
            <th scope="row">7</th>
            <td>Konten-6</td>
            <td>the Bird</td>
            <td> <a class="btn btn-primary text-white" href="update-content.php?konten=konten-6" role="button">Edit</a></td>
          </tr>
          <tr>
            <th scope="row">8</th>
            <td>Konten-7</td>
            <td>the Bird</td>
            <td> <a class="btn btn-primary text-white" href="update-content.php?konten=konten-7" role="button">Edit</a></td>
          </tr>
          <tr>
            <th scope="row">9</th>
            <td>Konten-8</td>
            <td>FAQ yang berisi pertanyaan dan jawaban yang sering ditanya konsumen</td>
            <td>
              <a class="btn btn-primary text-white" href="update-content.php?konten=konten-8" role="button">Edit</a>
            </td>
          </tr>
          <tr>
            <th scope="row">10</th>
            <td>Konten-8a</td>
            <td>FAQ yang berisi pertanyaan dan jawaban yang sering ditanya konsumen</td>
            <td>
              <a class="btn btn-primary text-white" href="update-content.php?konten=konten-8" role="button">Edit</a>
            </td>
          </tr>
          <tr>
            <th scope="row">11</th>
            <td>Konten-8b</td>
            <td>the Bird</td>
            <td> <a class="btn btn-primary text-white" href="update-content.php?konten=navbar" role="button">Edit</a></td>
          </tr>
          <tr>
            <th scope="row">12</th>
            <td>Sosmed</td>
            <td>Link-link sosial media yang berada di footer</td>
            <td> <a class="btn btn-primary text-white" href="update-content.php?konten=sosmed" role="button">Edit</a></td>
          </tr>
        </tbody>
      </table>
      <a href="logout.php" class="btn btn-danger float-right text-white mb-5">Logout</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>