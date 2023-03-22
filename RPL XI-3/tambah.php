<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CRUD PHP dan MYSQLi</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
	<body>
		<h3>TAMBAH DATA SISWA</h3>
		<form method="post" action="tambahkan.php">
			<table>
				<tr>
					<td>Nis</td>
					<td><input type="number" name="nis"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>Tanggal Lahir</td>
					<td><input type="text" name="tanggal"></td>
				</tr>
				<tr>
					<td>Rombel</td>
					<td><input type="text" name="rombel"></td>
				</tr>
				<tr>
					<td>Rayon</td>
					<td><input type="text" name="rayon"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>
			</table>
		</form>
			<p class="putter">@COPYRIGHT <font color="red">2020</font> ADEN AHMAD RIFAI</p>

	</body>
</html>