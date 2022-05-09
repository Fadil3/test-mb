<?php
include('dbconnection.php');
if(isset($_POST['id'])){
	$id = $_POST['id'];
    $text = $_POST['text'];
    $query_mysql=mysqli_query($db,"UPDATE text SET text='$text' WHERE id='$id'");
    
    header("location:update2.php");
 
}

?>