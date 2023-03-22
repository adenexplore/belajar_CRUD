<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi</title>
</head>
<body>
 
	<h2>CRUD DATA BUKU</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA BUKU</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($conn,"select * from buku where id_buku='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<input type="text" name="id_edit" value="<?php echo $id; ?>">
			<table>
				<tr>
					<td>Judul buku</td>
					<td><input type="text" name="judul_buku" value="<?php echo $d['judul_buku']; ?>"></td>
				</tr>
				<tr>
					<td>Penerbit</td>
					<td><input type="text" name="penerbit_buku" value="<?php echo $d['penerbit_buku']; ?>"></td>
				</tr>
				<tr>
			     	<td>Genre</td>
					<td><input type="text" name="genre_buku" value="<?php echo $d['Genre_buku']; ?>"></td>
				</tr>
				<tr>
			    	<td>Harga</td>
					<td><input type="text" name="harga_buku" value="<?php echo $d['harga_buku']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Update"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>