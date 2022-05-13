<?php
include('dbconnection.php');
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
      integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
      crossorigin="anonymous"
    />
</head>
<body>
    <!-- <form  method="GET" enctype='multipart/form-data'>
        <?php
        
            $id=$_GET['konten'];
            $ret=mysqli_query($db,"select * from image where tittle='$id'");
            $image = [];
            while ($row=mysqli_fetch_array($ret)) {
        ?>
 
            <div class="form-group">
                <img src="assets/image/<?php  echo $row['image'];?>" alt="" height="200px" /> <br>
                <input type='file' name='image[]'><br><br>
            </div> 
        <?php }?>
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Update</button>
        </div>
    </form> -->
	


<?php
if(isset($_POST['submit'])){
    if(isset($_POST['konten'])){
        // var_dump($_FILES);
        $i = 0;
        $id = $_POST['konten'];
        // var_dump($_FILES);
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
                    echo "File is an image - " . $check["mime"] . ".";
                    move_uploaded_file($tmp_img_name,$folder.$row['image'] );
                    // $db->query("INSERT INTO image (tittle, image) VALUES ('Doe', '$img_name')");
                } 
            }
            // header('index-admin.php');
        }
        var_dump($_POST);
        $i = 0;
        echo $_POST['text'][0];

        $ret=mysqli_query($db,"select * from text where tittle='$id'");
        while ($row=mysqli_fetch_array($ret)) { 
            $text = $_POST['text'][$i];
            $temp = $row['id'];
            $query_mysql=mysqli_query($db,"UPDATE text SET text='$text' WHERE id='$temp'");
            $i++;
        }
        // header('index-admin.php');
    }
	// $img_name=$_FILES['img_upload']['name'];
	// $tmp_img_name=$_FILES['img_upload']['tmp_name'];
	// $folder = 'assets/image/';
    // // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // $check = getimagesize($_FILES["img_upload"]["tmp_name"]);
    // if($check !== false) {
    //     echo "File is an image - " . $check["mime"] . ".";
    //     move_uploaded_file($tmp_img_name,$folder.$name_file );
    //     $db->query("INSERT INTO image (tittle, image) VALUES ('Doe', '$img_name')");
    // } else {
    //     echo "File is not an image.";
    // }
}

?>