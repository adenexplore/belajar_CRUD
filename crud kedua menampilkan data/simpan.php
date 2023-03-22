<?php  

if (isset($_POST['submit'])) {
	$Judul_buku = $_POST['judul']; 
	echo "judul : " . $Judul_buku; echo "<br>";
	$penerbit_buku = $_POST['penerbit_bk']; 
	echo "penerbit_bk : " . $penerbit_buku;  echo "<br>";
	$genre_buku = $_POST['genre_bk']; 
	echo "genre_bk : " . $genre_buku;  echo "<br>";
	$harga_buku = $_POST['harga_bk']; 
	echo "harga_bk : " . $harga_buku;  echo "<br>";

}
?>