<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CRUD PHP dan MYSQL</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body >
	<h2 class="judul">CRUD DATA SISWA	</h2>
	<br/>
	<a href="tambah.php" class="link">TAMBAH SISWA</a>
	<br/>
	<br/>
	<table  border="2">
		<tr style="color: black;">
			<th>No</th>
			<th>Nis</th>
			<th>Nama</th>
			<th>Tanggal Lahir</th>
			<th>Rombel</th>
			<th>Rayon</th>
			<th>Aksi</th>
		</tr>
		<?php 
		include 'koneksi.php';

		$no = 1;
		$data = mysqli_query($koneksi,"select * from siswa");

		while($d = mysqli_fetch_array($data)){

		 ?>

		 <tr>
		 	<td><?php echo $no++; ?></td>
		 	<td><?php echo $d['nis']; ?></td>
		 	<td><?php echo $d['nama']; ?></td>
		 	<td><?php echo $d['tanggal']; ?></td>
		 	<td><?php echo $d['rombel']; ?></td>
		 	<td><?php echo $d['rayon']; ?></td>
		 	<td>
		 		<a href="edit.php?nis=<?php echo $d['nis']; ?>" class="link1">EDIT</a>
		 		<a href="hapus.php?nis=<?php echo $d['nis']; ?>" class="link1">HAPUS</a>
		 	</td>
		 </tr>
		<?php } ?>
	</table>
	<p class="putter">@COPYRIGHT <font color="red">2020</font> ADEN AHMAD RIFAI</p>
</body>
</html>