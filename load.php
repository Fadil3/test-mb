<?php
include('dbconnection.php');
// $text = [];
$ret=mysqli_query($db,"select * from text");
$cnt=0;
$row=mysqli_num_rows($ret);
if($row>0){
    while ($row=mysqli_fetch_array($ret)) {
        $text[] =  $row['text'];
    } 
} 
?>  