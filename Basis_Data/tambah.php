<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi </title>
</head>
<body>
 
	<h2>CRUD DATA BUKU</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA BUKU</h3>
	<form method="post" action="tambahdata.php">
		<table>
			<tr>
				<td>kode buku</td>
				<td><input type="number" name="kode_buku"></td>
			</tr>
			<tr>			
				<td>judul buku</td>
				<td><input type="text" name="judul_buku"></td>
			</tr>
			
			<tr>
				<td>penulis buku</td>
				<td><input type="text" name="penulis_buku"><td>
			</tr>
			<tr>
				<td>penerbit buku</td>
				<td><input type="text" name="penerbit_buku"><td>
			</tr>
			<tr>
				<td>tahun penerbit</td>
				<td><input type="number" name="tahun_penerbit"></td>
			</tr>
			<tr>
				<td>stok</td>
				<td><input type="number" name="stok"></td>
			
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>