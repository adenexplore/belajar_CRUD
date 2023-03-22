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
	$data = mysqli_query($koneksi,"select * from bukuceria where kode_buku='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>
					<td>judul buku</td>
					<td><input type="text" name="judul_buku" value="<?php echo $d['judul_buku']; ?>"></td>
				</tr>
				<tr>
					<td>penulis buku</td>
					<td><input type="text" name="penulis_buku" value="<?php echo $d['penulis_buku']; ?>"></td>
				</tr>
				<tr>
			     	<td>penerbit buku</td>
					<td><input type="text" name="penerbit_buku" value="<?php echo $d['penerbit_buku']; ?>"></td>
				</tr>
				<tr>
			    	<td>tahun penerbit</td>
					<td><input type="text" name="tahun_penerbit" value="<?php echo $d['tahun_penerbit']; ?>"></td>
				</tr>
				<tr>
			    	<td>stok</td>
					<td><input type="number" name="stok" value="<?php echo $d['stok']; ?>"></td>
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