<?php
include('dbconnection.php');
// $text = [];
$ret = mysqli_query($db, "select * from text");
$cnt = 0;
$row = mysqli_num_rows($ret);
if ($row > 0) {
    while ($row = mysqli_fetch_array($ret)) {
        $text[] =  $row['text'];
        $title[] = $row['tittle'];
    }
}


// get seo text
$seo = mysqli_query($db, "SELECT * FROM seo");
$seo = mysqli_fetch_assoc($seo);


//get konten-1
$konten1 = mysqli_query($db, "SELECT * FROM text where tittle='konten-1'");
$konten1 = mysqli_fetch_assoc($konten1);

$konten2 = mysqli_query($db, "SELECT * FROM text where tittle='konten-2'");
$konten2 = mysqli_fetch_assoc($konten2);

$k3 = mysqli_query($db, "SELECT * FROM text where tittle='konten-3'");
$konten3 = mysqli_fetch_array($k3);

// $konten3a = mysqli_query($db, "SELECT * FROM text where tittle='konten-3a'");
$konten3a = mysqli_fetch_array($k3);

$konten4 = mysqli_query($db, "SELECT * FROM text where tittle='konten-4'");
$konten4 = mysqli_fetch_assoc($konten4);

$konten5 = mysqli_query($db, "SELECT * FROM text where tittle='konten-5'");
$konten5 = mysqli_fetch_assoc($konten5);

$konten6 = mysqli_query($db, "SELECT * FROM text where tittle='konten-6'");
$konten6 = mysqli_fetch_assoc($konten6);

$konten7 = mysqli_query($db, "SELECT * FROM text where tittle='konten-7'");
$k7 = mysqli_fetch_array($konten7);

$konten8 = mysqli_query($db, "SELECT * FROM text where tittle='konten-8'");
while ($row = mysqli_fetch_array($konten8)) {
    $faqs[] =  $row['text'];
}

$youtube = mysqli_query($db, "SELECT * FROM text where tittle='youtube'");
while ($row = mysqli_fetch_array($youtube)) {
    $yt[] =  $row['text'];
}

$temp = mysqli_query($db, "SELECT * FROM text where tittle='sosmed'");
while ($row = mysqli_fetch_array($temp)) {
    $sosmed[] =  $row['text'];
}

$temp = mysqli_query($db, "SELECT * FROM text where tittle='footer'");
while ($row = mysqli_fetch_array($temp)) {
    $footer[] =  $row['text'];
}