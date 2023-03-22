<?php 
$koneksi = mysqli_connect("localhost","root","","db_rpl25");
//$koneksi = mysqli_connect ("localhost","root","Nama_dbnya");
//cek connection
if (mysqli_connect_error()){
	echo "koneksi ke database gagal : ". mysqli_connect_error();

}
 ?>