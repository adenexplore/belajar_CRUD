<!DOCTYPE html>
<html>
<head>
	<title>CRUD menampilkan data</title>
</head>
<body>
	<h2>CRUD DATA BUKU</h2>
	<hr>
	<form method="post" action="simpan.php">
		<table>
			<tr>
				<td>Judul Buku</td>
				<td><input type="text" name="judul_bk"></td>
			</tr>
			<tr>			
				<td>Penerbit Buku</td>
				<td><input type="text" name="penerbit_bk"></td>
			</tr>
			<tr>			
				<td>genre Buku</td>
				<td><input type="text" name="genre_bk"></td>
			</tr>
			
			<tr>
				<td>Harga Buku</td>
				<td><input type="text" name="harga_bk"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>

</body>
</html>