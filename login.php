<?php
include('dbconnection.php');
session_start();

//  check if user is logged in
if (isset($_SESSION['admin_email'])) {
  header('location:index-admin.php');
}

// handle form login
if (isset($_POST['submit'])) {
  // get email and password
  $email = $_POST['email'];
  $password = $_POST['password'];
  // check if email and password is empty
  if (empty($email) || empty($password)) {
    // set error message at session
    $_SESSION['error'] = 'Email or Password is empty';
  } else {
    // check if email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $_SESSION['error'] = "Email is invalid";
    } else {
      // check if email is exist
      $sql = "SELECT * FROM admin WHERE email='$email' limit 1";
      $result = mysqli_query($db, $sql);
      $row = mysqli_fetch_assoc($result);
      if (mysqli_num_rows($result) == 0) {
        $_SESSION['error'] = "Email is invalid";
      } else {
        // check if md5 password is same with database
        if (md5($password) != $row['password']) {
          $_SESSION['error'] = "Password is invalid";
        } else {
          // set session
          $_SESSION['admin'] = $row['id'];
          // redirect to dashboard
          header('location: index-admin.php');
        }
      }
    }
  }
}

?>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
</head>

<body>
  <!-- display error from session -->
  <?php
  if (isset($_SESSION['error'])) {
    echo "<div class='alert alert-danger'>" . $_SESSION['error'] . "</div>";
    unset($_SESSION['error']);
  }
  ?>

  <div class="wrap-container mt-5">
    <div class="container">
      <div class="container">
        <div class="row row-padding justify-content-center">
          <div class="col-md-4 text-center">
            <form class="form-signin" method="POST" action="login.php">
              <img src="/assets/MB_logo 1.svg" alt="logo">
              <h1 class="font-weight-bold mb-5">Admin Panel</h1>
              <div class="form-group input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="far fa-envelope"></i> </span>
                </div>
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required autofocus>
              </div>
              <div class="form-group input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fas fa-lock"></i> </span>
                </div>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required autofocus>
              </div>
              <button name="submit" class=" btn btn-lg btn-primary btn-block" type="submit" onclick="check()">Sign
                in</button>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
</body>