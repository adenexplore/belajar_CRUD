<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CRUD PHP dan Mysqli</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
</head>	
	<body>
		<h3>EDIT DATA SISWA</h3>
		<?php 
		include 'koneksi.php';
		$nis = $_GET['nis'];
		$data = mysqli_query($koneksi,"select * from siswa where nis='$nis'");
		while($d = mysqli_fetch_array($data)){
		 ?>
		 <form method="post" action="update.php">
		 	<table>
		 		<tr>
		 			<td>Nama</td>
		 			<td>
		 				<input type="hidden" name="nis" value="<?php echo $d['nis'] ?>">
		 				<input type="text" name="nama" value="<?php echo $d['nama'] ?>">
		 			</td>
		 		</tr>
		 		<tr>
		 			<td>Tanggal Lahir</td>
		 			<td><input type="text" name="tanggal" value="<?php echo $d['tanggal'] ?>"></td>
		 		</tr>
		 		<tr>
		 			<td>rombel</td>
		 			<td><input type="text" name="rombel" value="<?php echo $d['rombel'] ?>"></td>		 				
		 		</tr>
		 		<tr>
		 			<td>rayon</td>
		 			<td><input type="text" name="rayon" value="<?php echo $d['rayon'] ?>"></td>
		 		</tr>
		 		<tr>
		 			<td></td>
		 			<td><input type="submit" value="update"></td>
		 		</tr>
		 	</table>
		 </form>
		<?php } ?>
			<p class="putter">@COPYRIGHT <font color="red">2020</font> ADEN AHMAD RIFAI</p>

	</body>
</html>