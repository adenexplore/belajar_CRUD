<?php 
$conn = mysqli_connect('localhost','root','','db_album');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <style>
        h1 {
            color:green;
        }
        .satu {
            width:100%; height:50px;
       }
       .link {
        text-decoration:none;padding:8px;background-color:blue;border:1px solid;color:white;margin-right:5px;
       }
       .link:hover{
           background:#DA0037;
       }
    </style>
</head>
<body>
    <center><h1>MYALBUM</h1></center>
    <a href="add.php" class="link" style="float:right;">Add New Album</a><br><br>

    <table border="2" cellpadding="10" cellspacing="0" class="satu">
		<tr bgcolor="green">
            <th>No</th>
            <th>Title</th>
            <th>Artist</th>
            <th>Action</th>
		</tr>
		<?php  
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($conn,"select * from tb_album1");
		while($d = mysqli_fetch_array($data)){
			?>
			<center>
			<tr>
				<td ><?php echo $no++; ?></td>
				<td><?php echo $d['title']; ?></td>
				<td><?php echo $d['artist']; ?></td>
                <td><center>
					<a href="edit.php?id=<?php echo $d['id']; ?>" class="link">EDIT    </a>
					<a href="delet.php?id=<?php echo $d['id']; ?>" class="link">HAPUS</a>
                    </center>
				</td>
			</tr>
			<?php 
		}
		?>
</body>
</html>
