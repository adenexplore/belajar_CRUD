<!DOCTYPE html>
<html lang="en">
<head>
 <title>CRUD DAN MYSQL</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
 <script src="js/jquery.js"></script>
 <script src="bootstrap/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">

</head>
<body>

 <?php
 //tambahkan dbconnect
 include('koneksi.php');

 //query
 $query = "SELECT * FROM buku";

 $result = mysqli_query($conn , $query);

 ?>

 <div class="container bg-info" style="padding-top: 20px; padding-bottom: 20px;">
  <h3>CRUD DATA BUKU </h3>
  <hr>
  <div class="row">
   <div class="col-sm-4">
    <a href="tambahdata.php">TAMBAH DATA BUKU</a>
    
   </div>
   <div class="col-sm-8">
    <h3>Tabel Daftar Buku</h3>
    <table class="table table-striped table-hover dtabel">
     <thead>
      <tr>
       <th>No</th>
       <th>Judul Buku</th>
       <th>Penerbit Buku</th>
       <th>Genre Buku</th>
       <th>Harga Buku</th>
       <th>Aksi</th>
      </tr>
     </thead>
     <tbody> 
      
      <?php
       $no = 1;  
       while ($row = mysqli_fetch_assoc($result)) {
      ?>
      <tr>
       <td><?php echo $no++; ?></td>
       <td><?php echo $row['judul_buku']; ?></td>
       <td><?php echo $row['penerbit_buku']; ?></td>
       <td><?php echo $row['Genre_buku']; ?></td>
       <td><?php echo $row['harga_buku']; ?></td>
       <td>
        <a href="editdata.php?id=<?php echo $row['id_buku'];?>" class="btn btn-success" role="button">Edit</a>
        <a href="hapus.php?id=<?php echo $row['id_buku']?>" class="btn btn-danger" role="button">Delete</a>
       </td>
      </tr>

      <?php
       }
       mysqli_close($conn); 
      ?>
     </tbody>
    </table>
   </div>
  </div>
 </div>
</body>

 <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
 <script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
 <script>
 $(document).ready(function() {
  $('.dtabel').DataTable();
 } );
 </script>

</html>