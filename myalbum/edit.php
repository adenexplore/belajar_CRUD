<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
    <style>
    
    h1 {
        color:green;
    }
    .form {
        border: 1px solid;width:30%;font-size:20px;text-align:center;font-family:Georgia, serif;
    }
    .masukan {
        padding:50px;width:70%;
    }
    input .bungkus    {
        color:red;font-family:Georgia, serif;width:100%;font-size:20px;
    }
    .link {
        text-decoration:none;padding:10px;
        background-color:blue;color:white;width:50%;margin-right:5px;
        cursor:pointer;
       }
       .link:hover{
           background:#DA0037;
       }
       </style>
</head>
<body>
    <center>
        <?php
            include ('koneksi.php');

            $id= $_GET['id'];

            $data = mysqli_query($conn,"select * from tb_album1 where id = '$id'");
             while ($d = mysqli_fetch_array($data)) :
        ?>
        <form method="post" action="update.php?id=<?php echo $id ?>" class="form">
			<table class="layout">
            <h1><p> UPDATE DATA</p></h1>
				<tr>			
					<td>TITLE</td>
					<td>
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="text" name="title" class="masukan" style="font-size:30px;font-family:Georgia, serif;" value="<?php echo $d['title']; ?>">
                    </td>
				</tr>
				<tr>
					<td>ARTIST</td>
					<td><input type="text" name="artist" class="masukan" style="font-size:30px;font-family:Georgia, serif;" value="<?php echo $d['artist']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="edit" class="link" value="Update"></td>
				</tr>		
			</table>
        </form>
    <?php endwhile ?>
    </center>          
</body>
</html>