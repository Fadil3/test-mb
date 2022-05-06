<?php
include('dbconnection.php');
?>
<form  method="POST" enctype='multipart/form-data'>
 <?php
$id=$_GET['editid'];
$ret=mysqli_query($db,"select * from image where id='$id'");
while ($row=mysqli_fetch_array($ret)) {
?>
<h2>Update </h2>
<p class="hint-text">Update your info.</p>
<div class="form-group">
    <div class="row">
    <div class="col">
        <input type="text" class="form-control" name="tittle" value="<?php  echo $row['tittle'];?>" required="true">
    </div>       	
</div>
 
<div class="form-group">
    <img src="assets/image/<?php  echo $row['image'];?>" alt="" height="200px" /> <br>
    <!-- <input class="form-control" name="contactno" value="<?php  echo $row['image'];?>"  maxlength="10" > -->
    <input type='file' name='img_upload'><br><br>
    <input type='submit' name='img_submit'>
</div>
<?php  $name_file =  $row['image'];?>       
<?php 
}?>
<div class="form-group">
    <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Update</button>
</div>
    </form>

    <?php
if(isset($_POST['img_submit'])){
	$img_name=$_FILES['img_upload']['name'];
	$tmp_img_name=$_FILES['img_upload']['tmp_name'];
	$folder = 'assets/image/';
    // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["img_upload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        move_uploaded_file($tmp_img_name,$folder.$name_file );
        $db->query("INSERT INTO image (tittle, image) VALUES ('Doe', '$img_name')");
    } else {
        echo "File is not an image.";
    }
}

?>