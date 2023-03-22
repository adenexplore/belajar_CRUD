
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Album</title>
    <style>
    h1 {
            color:green;
    }
    .masukan {
        padding:50px;width:70%;
    }
    .bungkus    {
        color:red;font-family:Georgia, serif;width:70%;font-size:20px;
    }
    .link {
        text-decoration:none;padding:8px;background-color:blue;border:1px solid;color:white;margin-right:4px;
       }
       .link:hover{
           background:#DA0037;
       }
    </style>
</head>
<body>
    <center>
 <h1>Tambah Data Album</h1>
    <form method="post" Action="confir.php">
		<table class="layout" border ="2" cellspacing="0" cellpadding="10">
			<tr class="bungkus">
				<td>Title</td>
				<td>:</td>
				<td><input type="text" name="title" placeholder="Isi Dengan Nama Title" style="padding:20px;font-size:20px;"></td>
			</tr>
			<tr  class="bungkus">			
				<td>artist</td>
				<td>:</td>
				<td><input type="text" name="artist" class="masukan" placeholder="Isi Dengan Nama artist"  style="padding:20px;padding-right:45px;font-size:20px;"></td>
			</tr>
            <tr>
            <tr>
				<td  class="bungkus">Action</td>
				<td>:</td>
				<td><input type="submit" name="simpan" value="SIMPAN" class="link" style="width:100%;"></td>
			</tr>		
		</table>
	</form>
       <br>
        <a href="index.php" class="link"> <= Kembali Ke Halaman Utama</a>
        </center>
</body>
</html>