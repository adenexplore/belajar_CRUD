<?php 
$koneksi = mysqli_connect("localhost","root","","basisdata_buku");
//$koneksi = mysql_connect("localhost", "root", "", "Nama_dbnya");

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>