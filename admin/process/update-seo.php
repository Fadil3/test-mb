<!-- handle submit -->
<?php
include('dbconnection.php');
// start session
session_start();
if (isset($_POST)) {
  // get title seo
  $title = $_POST['title'];
  // get description seo
  $description = $_POST['description'];
  // get keywords seo
  $keyword = $_POST['keyword'];

  // insert into seo table
  $sql = "UPDATE seo SET title='$title', description='$description', keyword='$keyword'";
  $result = mysqli_query($db, $sql);
  if ($result) {
    // set success message
    $_SESSION['success'] = "Update seo success";
  } else {
    // set error message
    $_SESSION['error'] = "Update seo failed";
  }
  var_dump($result);
  //redirect to index-admin.php
  header('location: index-admin.php');
}
?>