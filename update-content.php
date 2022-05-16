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

// connect to database
include('dbconnection.php');

// get parameter konten
$title = $_GET['konten'];

// select data from database
$sql = "SELECT * FROM text WHERE tittle='$title'";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($result);

//select image from database
$sql = "SELECT * FROM image WHERE tittle='$title'";
$result_img = mysqli_query($db, $sql);
$row_img = mysqli_fetch_assoc($result_img);


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
  <center class="my-5">
    <h1>Update <?php echo $title ?></h1>
  </center>
  <div class="container">
    <form method="post" enctype='multipart/form-data'>
      <!-- loop array image -->
      <?php
      $id = $_GET['konten'];
      $ret = mysqli_query($db, "select * from image where tittle='$id'");
      $i = 0;
      $j = 1;
      while ($row_img = mysqli_fetch_array($ret)) { ?>
        <img src="assets/image/<?php echo $row_img['image']; ?>" alt="" height="200px" /> <br>
        <div class="form-group"> 
          <input type='file' name='image[]' id="image">
        </div>
        <br><br>
      <?php $i++;
      }
      ?>
      <?php if ($title == 'navbar' || $title == 'konten-8' || $title == 'youtube' || $title == 'sosmed'){
          do {
            ?>
            <div class="form-group">
            <label for="<?php echo $row['text'] ?>">Text ke-<?php echo $j++ ?></label>
            <input class="form-control" type=" text" name="text[]" size="500" value="<?php echo $row['text'] ?>" id="<?php echo $row['text'] ?>">
            </div>
            <?php
          } while ($row = mysqli_fetch_assoc($result));
      }else{
        ?>
        <textarea id="mytextarea" name="content">
        <?php
        echo $row['text']
        ?>
      </textarea>
      <?php
      }?>
      
      <!-- submit -->
      <center class="my-2">
        <input type="submit" name="submit" value="Submit" class="btn btn-primary" />
      </center>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>
</body>

</html>

<!-- update to db -->
<?php
if (isset($_POST['submit'])) {
  $content = $_POST['content'];
  $sql = "UPDATE text SET text='$content' WHERE tittle='$title'";
  $result = mysqli_query($db, $sql);
  $i = 0;
  $id = $title;

  if(isset($_POST['text'])){
    $ret=mysqli_query($db,"select * from text where tittle='$title'");
    while ($row=mysqli_fetch_array($ret)) { 
      $text = $_POST['text'][$i];
      $temp = $row['id'];
      $query_mysql=mysqli_query($db,"UPDATE text SET text='$text' WHERE id='$temp'");
      $i++;
    }
    $i = 0;
  }

  $ret=mysqli_query($db,"select * from image where tittle='$id'");
    while ($row=mysqli_fetch_array($ret)) { 
      if(strlen($_FILES['image']['name'][$i]) > 0){
        $img_name=$_FILES['image']['name'][$i];
        $tmp_img_name=$_FILES['image']['tmp_name'][$i];
        $folder = 'assets/image/';
                // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["image"]["tmp_name"][$i]);
        $i++;
        if($check !== false) {
          move_uploaded_file($tmp_img_name,$folder.$row['image'] );
        } 
      }
    }

  if ($result) {
    $_SESSION['success'] = "Update success";
    header('location: update-content.php?konten=' . $title);
  } else {
    $_SESSION['error'] = "Update failed";
    header('location: update-content.php?konten=' . $title);
  }
}
