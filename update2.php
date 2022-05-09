<?php
include('dbconnection.php');
?>
<html>
<head>
	<!-- <title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title> -->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- <div class="judul">		
		<h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
		<h2>Menampilkan data dari database</h2>
		<h3>www.malasngoding.com</h3>
	</div> -->
	
	<br/>
	
	<!-- <a href="index.php">Lihat Semua Data</a> -->
 
	<br/>
	<!-- <h3>Edit data</h3> -->
 
	<?php 
	$id=$_GET['editid'];
    $query_mysql=mysqli_query($db,"select * from text where id='$id'");
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)){
	?>
	<form action="update3.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="text" name="tittle" value="<?php echo $data['tittle'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="text" value="<?php echo $data['text'] ?>"></td>					
			</tr>	
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>
<?php
if(isset($_POST['id'])){
	$id = $_POST['id'];
    $text = $_POST['text'];
 
    mysql_query("UPDATE text SET nama='$text',  WHERE id='$id'");
    
 
}

?>