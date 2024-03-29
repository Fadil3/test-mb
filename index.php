<!DOCTYPE html>
<?php
include('admin/db/load.php');
$i = 0;
?>
<html lang="id">

<head>
  <!-- Required meta tags -->
  <meta name="title" content="<?php echo $seo["title"]; ?>">
  <meta name="description" content="<?php echo $seo["description"]; ?>">
  <meta name="keywords" content="<?php echo $seo["keyword"]; ?>">
  <meta name="robots" content="index, follow">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="language" content="Indonesia">
  <meta name="revisit-after" content="7 days">
  <meta name="author" content="MB Properti">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- social media metatags -->
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://pesona.mbproperti.com/">
  <meta property="og:title" content="<?php echo $seo["title"]; ?>">
  <meta property="og:description" content="<?php echo $seo["description"]; ?>">
  <meta property="og:image" content="assets/MB_logo 1.svg">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://pesona.mbproperti.com/">
  <meta property="twitter:title" content="<?php echo $seo["title"]; ?>">
  <meta property="twitter:description" content="<?php echo $seo["description"]; ?>">
  <meta property="twitter:image" content="assets/MB_logo 1.svg">

  <!-- favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon//favicon-16x16.png">

  <!-- title html -->
  <title><?php echo $seo["title"]; ?></title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />

  <link rel="stylesheet" href="style.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
</head>

<body>
  <section class="section-headersatu">
    <nav class="navbar navbar-expand-lg navbar-dark main-nav" style="background-color: rgba(0, 0, 0, 0.5)">
      <a class="navbar-brand" href="#">
        <img src="assets/image/MB_logo.png" alt="" height="50px" />
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse nav navbar-nav mx-auto" id="navbarText">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#tentang"><?php echo $text[$i++]; ?> </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#galeri"><?php echo $text[$i++]; ?> </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#daftarharga"><?php echo $text[$i++]; ?> </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#promo"><?php echo $text[$i++]; ?></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#faq"><?php echo $text[$i++]; ?> </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#kontak"><?php echo $text[$i++]; ?> </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#siteplan"><?php echo $text[$i++]; ?> </a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- show konten-1 -->
    <div class="mt-5 py-3">
      <?php
      echo $konten1["text"];
      ?>
    </div>
  </section>

  <section class="section-headerdua">
    <br />
    <div class="row">
      <div></div>
      <div class="garis1"></div>
      <div class="garis2"></div>
    </div>
    <br />
    <div class="garis3"></div>

    <center class="mt-5">
      <?php
      echo $konten2["text"];
      ?>
      <button type="button" class="btn btn-success my-2" onclick={whatsapp()}>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
          <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
        </svg>
        Miliki Sekarang
      </button>
    </center>
    <br>
    <div class="garis4"></div>
    <!-- <br> -->
  </section>

  <section class="section-headertiga">
    <div class="container containertiga">
      <div class="row">
        <div class="col-lg-6 col-lg text-center bg1-headertiga">
          <div class="section-boxWhite mx-auto mt-3 content-headertiga1">
            <?php
            echo $konten3["text"];
            ?>
          </div>
          <br />
        </div>
        <div class="col-lg-6 col-lg text-center bg2-headertiga">
          <div class="section-boxWhite mx-auto content-headertiga2">
            <?php
            echo $konten3a["text"];
            ?>
          </div>
          <br />
        </div>
      </div>
    </div>
  </section>

  <section class="section-headerempat">
    <div class="container">
      <div class="row">
        <div class="col content-4 text-center">
          <img src="assets/image/cluster3.png" alt="" class="photo-3" />
          <img src="assets/image/cluster2.png" alt="" class="photo-2" />
          <img src="assets/image/cluster1.png" alt="" class="photo-1" />
        </div>
        <div class="col-lg pt-4 text-center">
          <?php
          echo $konten4["text"];
          ?>
          <button type="button" class="btn btn-success my-3" onclick={whatsapp()}>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
              <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
            </svg>
            Miliki Sekarang
          </button>
        </div>
      </div>
    </div>
  </section>

  <!--Konten 1 -->
  <section class="section-kontenSatu">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6 section-boxWhite shadow-lg">
          <?php
          echo $konten5["text"];
          ?>
        </div>

        <div class="col-lg-6 align-self-center pt-4 text-center" id="tentang">
          <div class="d-flex justify-content-end">
            <img src="assets/image/bg2.jpg" alt="" class="img-fluid" style="box-shadow: 10px 10px 20px !important" />
          </div>
          <button type="button" class="btn btn-success my-5" onclick={whatsapp()}>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
              <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
            </svg>
            Miliki Sekarang
          </button>
          <!-- <h1>MUHAMMAD DENNIS NURIMAN</h1> -->
        </div>
      </div>
    </div>
  </section>
  <!--Akhir Konten 1-->

  <!--Konten 2-->
  <section>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="d-flex justify-content-center align-items-center mt-5">
            <div class="kotak1"></div>
            <h1 class="font-weight-bold p-4 py-5" id="galeri">GALERI</h1>
            <div class="kotak1"></div>
          </div>

          <div style="position: relative">
            <!-- Carousel -->
            <input type="radio" name="slider" id="item-1" checked />
            <input type="radio" name="slider" id="item-2" />
            <input type="radio" name="slider" id="item-3" />
            <div class="galeris">
              <label class="galeri" for="item-1" id="song-1">
                <img class="foto" src="assets/image/carousel1.jpg" alt="song" />
              </label>
              <label class="galeri" for="item-2" id="song-2">
                <img class="foto" src="assets/image/carousel2.jpg" alt="song" />
              </label>
              <label class="galeri" for="item-3" id="song-3">
                <img class="foto" src="assets/image/carousel3.jpg" alt="song" />
              </label>
            </div>
            <!--Akhir Carousel -->
          </div>

          <div class="spasi"></div>

          <div class="d-flex justify-content-center mt-5">
            <div class="kotak2"></div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center mt-4">
        <div class="col-lg-3 col-md-3 mb-4">
          <iframe src="<?php $i = 0;
                        echo $yt[$i++]; ?>" width="100%" height="150" frameborder="0" allowfullscreen class="bisnis"></iframe>
        </div>
        <div class="col-lg-3 col-md-3 mb-4">
          <iframe src="<?php echo $yt[$i++]; ?>" width="100%" height="150" frameborder="0" allowfullscreen class="bisnis"></iframe>
        </div>
        <div class="col-lg-3 col-md-3 mb-4">
          <iframe src="<?php echo $yt[$i++]; ?>" width="100%" height="150" frameborder="0" allowfullscreen class="bisnis"></iframe>
        </div>
        <div class="col-lg-3 col-md-3 mb-4">
          <iframe src="<?php echo $yt[$i++]; ?>" width="100%" height="150" frameborder="0" allowfullscreen class="bisnis"></iframe>
        </div>
        <div class="col d-flex justify-content-center">
          <div class="kotak3"></div>
        </div>
        <div class="col d-flex justify-content-center">
          <button type="button" class="btn btn-success my-5" onclick={whatsapp()}>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
              <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
            </svg>
            Miliki Sekarang
          </button>
        </div>
      </div>
    </div>
  </section>
  <!--Akhir Konten 2-->

  <!--Konten 3-->
  <section class="section-kontenTiga">
    <div class="container">
      <div class="row d-flex justify-content-between">
        <div class="col-lg-7 align-self-center pt-4 text-center">
          <img src="assets/image/bg2.jpg" alt="" class="img-fluid" style="box-shadow: 10px 10px 20px !important" />
          <!-- <h1>MUHAMMAD DENNIS NURIMAN</h1> -->
        </div>

        <div class="col-lg-5 section-boxWhite shadow-lg text-right">
          <?php
          echo $konten6['text'];
          ?>
          <div class="text-center">
            <button type="button" class="btn btn-success mt-5 mb-3" onclick={whatsapp()}>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
              </svg>
              Miliki Sekarang
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Konten 3-->

  <!--Konten 4-->
  <section class="section-kontenTiga">
    <div class="row">
      <div class="kotak5"></div>
      <div class="kotak6"></div>
    </div>
    <br />
    <div class="kotak4"></div>
    <div class="container" id="promo">
      <div class="row d-flex justify-content-between">
        <div class="col-lg-6 pt-5 text-center">
          <?php
          echo $k7['text'];
          ?>
          <button type="button" class="btn btn-success mt-5 mb-3" onclick={whatsapp()}>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
              <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
            </svg>
            Miliki Sekarang
          </button>
        </div>

        <div class="col-lg-5 section-boxBlack shadow-lg text-center">
          <?php
          $k7 = mysqli_fetch_array($konten7);
          echo $k7['text'];
          ?>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-end">
      <div class="kotak7"></div>
    </div>
  </section>

  <!-- SECTION CONTENTG START -->
  <div class="my-5 py-3" id="faq">
    <div class="container">
      <div class="faq-1">
        <!-- TITLE START -->
        <div class="d-flex justify-content-center align-items-center mt-5">
          <h1 class="font-weight-bold text-center py-3 p-4"><?php $i = 0;
                                                            echo $faqs[$i++]; ?></h1>
          <div class="kotak1"></div>
        </div>
        <!-- TITLE END -->
        <div class="accordion" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne">
              <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <div class="row flex justify-content-between">
                  <?php echo $faqs[$i++]; ?>
                  <i class="fa-solid fa-angle-down"></i>
                </div>
              </button>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <div class="isiFaqs">
                  <?php echo $faqs[$i++]; ?>
                  <br>
                  <br>
                  <?php echo $faqs[$i++]; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <div class="row flex justify-content-between">
                    <?php echo $faqs[$i++]; ?>
                    <i class="fa-solid fa-angle-down"></i>
                  </div>
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                <div class="isiFaqs">
                  <?php echo $faqs[$i++]; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <div class="row flex justify-content-between">
                    <?php echo $faqs[$i++]; ?>
                    <i class="fa-solid fa-angle-down"></i>
                  </div>
                </button>
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                <div class="isiFaqs">
                  <p>
                    <?php echo $faqs[$i++]; ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFour">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  <div class="row flex justify-content-between">
                    <?php echo $faqs[$i++]; ?>
                    <i class="fa-solid fa-angle-down"></i>
                  </div>
                </button>
              </h2>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
              <div class="card-body">
                <div class="isiFaqs">
                  <p>
                    <?php echo $faqs[$i++]; ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFive">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  <div class="row flex justify-content-between">
                    <?php echo $faqs[$i++]; ?>
                    <i class="fa-solid fa-angle-down"></i>
                  </div>
                </button>
              </h2>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
              <div class="card-body">
                <div class="isiFaqs">
                  <p>
                    <?php echo $faqs[$i++]; ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingSix">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  <div class="row flex justify-content-between">
                    <?php echo $faqs[$i++]; ?>
                    <i class="fa-solid fa-angle-down"></i>
                  </div>
                </button>
              </h2>
            </div>
            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
              <div class="card-body">
                <div class="isiFaqs">
                  <p>
                    <?php echo $faqs[$i++]; ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="my-5 mx-auto" id="daftarharga">
      <div class="container-fluid">
        <div class="section-content">
          <div class="d-flex justify-content-center align-items-center mt-5">
            <div class="kotak1"></div>
            <h1 class="sep-line-one text-center font-weight-bold p-3">
              Daftar Harga
            </h1>
            <div class="kotak1"></div>
          </div>
          <div class="d-flex flex-column flex-lg-row  bd-highlight mb-3 justify-content-around align-items-center">
            <div class="p-2">
              <img src="assets/image/zinnia.jpeg" class="d-block w-100" alt="..." width="400" height="400" />
            </div>
            <div class="p-2">
              <img src="assets/image/elegan.jpg" class="d-block w-100" alt="..." width="400" height="400" />
            </div>
            <div class="p-2">
              <img src="assets/image/azalea.jpg" class="d-block w-100" alt="..." width="400" height="400" />
            </div>
          </div>
        </div>
      </div>
      <hr>
    </div>



    <div class="bg-form p-5" id="kontak">
      <div class="row mt-5 flex-column flex-md-row justify-content-around align-items-center">
        <div class="col-md-4">
          <div class="text-center p-2" style="background-color: rgba(255, 255, 255, 0.8)">
            <!-- logo -->
            <div class="logo">
              <img src="assets/MB_logo 1.svg" alt="logo" />
            </div>
            <p class="font-weight-bold">
              PT. MEKAR BARU PROPERTI INDONESIA Jl. Jalan Raya Cirendeu No.107
              Ciputat Timur, Tangsel (10 Menit Dari MRT Lebak Bulus)
            </p>
          </div>
        </div>
        <div class="col-md-5 text-white p-10" style="background-image: linear-gradient(#ad8c32, #dcb64d)">
          <h2 class="text-center font-weight-bold mt-2">Kontak Kami</h2>
          <form action="admin/process/pesan.php" id="posts" class="p-2 flex-column" enctype="multipart/form-data" method="post" accept-charset="utf-8">
            <input type="hidden" name="csrf_token" value="e476c0a3633e3f6890cf1782f011832e" />
            <div class="form-group">
              <label for="nama" class="font-weight-bold">Nama</label>
              <input type="text" class="form-control" id="nama" name='nama' placeholder="" />
            </div>
            <div class="form-group">
              <label for="email" class="font-weight-bold">Email</label>
              <input type="email" class="form-control" id="email" name='email' placeholder="" />
            </div>
            <div class="form-group">
              <label for="telepon" class="font-weight-bold">Telepon</label>
              <input type="tel" class="form-control" id="telepon" name='telepon' placeholder="" />
            </div>
            <div class="form-group">
              <label for="subjek" class="font-weight-bold">Subjek</label>
              <input type="text" class="form-control" id="subjek" name='subjek' placeholder="" />
            </div>
            <div class="form-group">
              <label for="pesan" class="font-weight-bold">Pesan Anda</label>
              <input type="text" class="form-control" id="pesan" name='pesan' placeholder="isi pesan anda disini" />
            </div>
            <div class="mx-auto text-center py-3">
              <button type="submit" class="btn btn-success" name="submit">
                <span class="font-weight-bold"> Kirim Pesan</span>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8 mx-auto text-center my-5">
        <h1 class="font-weight-bold" id="siteplan">SITE PLAN</h1>
        <img src="assets/image/siteplan.jpg" alt="" class="img-fluid" />
        <h3>Site Plan Pesona Azalea</h3>
        <p class="font-weight-normal">Pinggir Jalan Raya Utama</p>
      </div>
    </div>
  </div>

  <footer class="dark text-white px-4">
    <div class="row flex justify-content-around">
      <div class="col-lg-5 col-md-12 col-sm-12 text-center">
        <div class="mx-auto">
          <a href="https://pesona.mbproperti.com/">
            <img src="assets/MB_logo 1.svg" alt="MB Properti" style="width: 250px !important; height: 250px !important" />
          </a>
        </div>
        <div class="d-flex flex-row justify-content-around mx-2 align-items-lg-center">
          <div class="item">
            <a class="border-0 justify-content-center align-items-center">
              <img src="assets/bsi.svg" alt="Projects MB Properti" style="height: 80px; width: 90px" class="mx-auto d-block img-fluid" />
            </a>
          </div>
          <div class="item">
            <a class="border-0 justify-content-center align-items-center">
              <img src="assets/btn-syariah.svg" alt="Projects MB Properti" style="height: 58px; width: 272px" class="mx-auto d-block img-fluid" />
            </a>
          </div>
        </div>
      </div>
      <!-- USEFUL LINKS -->
      <div class="col-lg-3 col-md-12 col-sm-12 pt-4">
        <div class="flex-column justify-content-start">
          <?php echo $footer[0]; ?>
          <div class="row flex justify-content-around">
            <div class="">
              <a href="<?php $i = 0;
                        echo $sosmed[$i++]; ?>" target="_blank"><i class="fa-brands fa-facebook fa-2xl"></i></a>
            </div>
            <div class="">
              <a href="<?php echo $sosmed[$i++]; ?>" target="_blank"><i class="fa-brands fa-instagram fa-2xl"></i></a>
            </div>
            <div class="">
              <a href="<?php echo $sosmed[$i++]; ?>" target="_blank"><i class="fa-brands fa-youtube fa-2xl"></i></a>
            </div>
            <div class="">
              <a href="<?php echo $sosmed[$i++]; ?>" target="_blank"><i class="fa-brands fa-linkedin fa-2xl"></i></a>
            </div>
            <div class="">
              <a href="<?php echo $sosmed[$i++]; ?>" target="_blank"><i class="fa-brands fa-telegram fa-2xl"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-12 col-sm-12 pt-4">
        <div class="flex-column justify-content-start">
          <?php echo $footer[1]; ?>
        </div>
      </div>
    </div>
    <div class="row mt-2">
      <div class="col-md-12">
        <p class="text-center text-white">
          <!-- get current year -->
          <small>
            © <?php echo date('Y'); ?> PT. Mekar Baru Properti Indonesia.
          </small>
        </p>
      </div>
    </div>
  </footer>

  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
      Tawk_LoadStart = new Date();
    (function() {
      var s1 = document.createElement('script'),
        s0 = document.getElementsByTagName('script')[0]
      s1.async = true
      s1.src = 'https://embed.tawk.to/6016dc3fc31c9117cb74582f/1etckpdnp'
      s1.charset = 'UTF-8'
      s1.setAttribute('crossorigin', '*')
      s0.parentNode.insertBefore(s1, s0)
    })()
  </script>
  <!--End of Tawk.to Script-->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  <script>
    function whatsapp() {
      window.open("https://api.whatsapp.com/send?phone=6282288773351&text=Halo,%20Saya%20Tertarik%20Promo%20Terbaru.%20Mohon%20Info%20Unit%20Rumah%20Dekat%20MRT%20Dari%20MB%20Properti")
    }
  </script>
</body>

</html>