<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi</title>
</head>
<body>
 
	<h2>CRUD DATA BUKU</h2>
	<br/>
	<a href="tambah.php">+ Tambah Buku</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>kode buku</th>
			<th>judul buku</th>
			<th>penulis buku</th>
			<th>penerbit buku</th>
			<th>Tahun penerbit</th>
			<th>stok</th>
			<th>Opsi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from bukuceria");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['kode_buku']; ?></td>
				<td><?php echo $d['judul_buku']; ?></td>
				<td><?php echo $d['penulis_buku']; ?></td>
				<td><?php echo $d['penerbit_buku']; ?></td>
				<td><?php echo $d['tahun_penerbit']; ?></td>
				<td><?php echo $d['stok']; ?></td>
				
				<td>
					<a href="edit.php?id=<?php echo $d['kode_buku']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['kode_buku']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>