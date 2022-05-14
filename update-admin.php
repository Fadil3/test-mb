<?php
include('dbconnection.php');
?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
</head>

<body>
    <center>
        <h1>Update konten <?php echo $_GET['konten'] ?></h1>
    </center>
    <form action="update-admin2.php" method="POST" enctype='multipart/form-data' class="px-5">
        <?php
        if (isset($_GET['konten'])) {
            $id = $_GET['konten'];
            $ret = mysqli_query($db, "select * from image where tittle='$id'");
            $i = 0;
            $j = 1;
            while ($row = mysqli_fetch_array($ret)) { ?>
                <img src="assets/image/<?php echo $row['image']; ?>" alt="" height="200px" /> <br>
                <div class="form-group">
                    <input type='file' name='image[]' id="image">
                </div>
                <br><br>
            <?php $i++;
            }
            $ret = mysqli_query($db, "select * from text where tittle='$id'");
            while ($row = mysqli_fetch_array($ret)) { ?>
                <td>
                    <div class="form-group">
                        <label for="<?php echo $row['text'] ?>">link ke <?php echo $j++ ?></label>

                        <input class="form-control" type=" text" name="text[]" size="500" value="<?php echo $row['text'] ?>" id="<?php echo $row['text'] ?>">
                    </div>
                </td>
        <?php }
        } ?>
        <input type="hidden" name="konten" value="<?php echo $id ?>">
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Update</button>
            <a class="btn btn-primary btn-lg btn-block text-white" href="/index-admin.php">Kembali</a>
        </div>
    </form>



    <?php
    if (isset($_POST['submit'])) {
        $img_name = $_FILES['img_upload']['name'];
        $tmp_img_name = $_FILES['img_upload']['tmp_name'];
        $folder = 'assets/image/';
        // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["img_upload"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            move_uploaded_file($tmp_img_name, $folder . $name_file);
            // $db->query("INSERT INTO image (tittle, image) VALUES ('Doe', '$img_name')");
        } else {
            echo "File is not an image.";
        }
    }

    ?>