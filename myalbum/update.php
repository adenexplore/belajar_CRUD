<?php 
include 'koneksi.php';
$id = $_GET['id'];
$title   = $_POST['title'];
$artist = $_POST['artist'];
 
$data=mysqli_query ($conn,"UPDATE tb_album1 SET title='$title', artist='$artist' WHERE id='$id'")or die (mysqli_error($conn));
if($data) {
?>
<script language="JavaScript"> document.location='index.php'</script>
<?php
} 
?>