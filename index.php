<?php
include('dbconnection.php');
if(isset($_POST['img_submit'])){
	$img_name=$_FILES['img_upload']['name'];
	$tmp_img_name=$_FILES['img_upload']['tmp_name'];
	$folder = 'assets/image/';
    // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["img_upload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        move_uploaded_file($tmp_img_name,$folder."air.png");
        $db->query("INSERT INTO image (tittle, image) VALUES ('Doe', '$img_name')");
    } else {
        echo "File is not an image.";
    }
}

?>
<form action='' method='POST' enctype='multipart/form-data'>
<input type='file' name='img_upload'><br><br>
<input type='submit' name='img_submit'>
</form>

