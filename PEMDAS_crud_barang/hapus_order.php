<?php 
	//hubungkan ke DBMS atau disebut functions.php
	require 'functions.php';

	$id = $_GET["id"];

	if( hapus1($id) > 0) {
		echo "
		<script>
			alert('data berhasil dihapus');
			document.location.href = 'order.php';
		</script>
		";
	} else {
		echo "
		<script>
			alert('data gagal dihapus');
			document.location.href = 'order.php';
		</script>
		";
	}

 ?>