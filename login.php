<?php
include('dbconnection.php');
?>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
</head>

<body>
  <div class="wrap-container mt-5">
    <div class="container">
      <div class="row row-padding justify-content-center">
        <div class="col-md-4 text-center">
          <form class="form-signin" method="POST" action="/login.php">
            <img src="/assets/MB_logo 1.svg" alt="logo">
            <h1 class="font-weight-bold mb-5">Admin Panel</h1>
            <div class="form-group input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"> <i class="far fa-envelope"></i> </span>
              </div>
              <label for="inputEmail" class="sr-only">Email address</label>
              <input type="email" id="userName" class="form-control" placeholder="Email address" required autofocus>
            </div>
            <div class="form-group input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fas fa-lock"></i> </span>
              </div>
              <label for="inputPassword" class="sr-only">Password</label>
              <input type="password" id="userPw" class="form-control" placeholder="Password" required autofocus>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit" onclick="check()">Sign
              in</button>
            </p>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>