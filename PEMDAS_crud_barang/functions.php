<?php
$db = mysqli_connect("localhost","root","","pemdas");

    function query($query) {
        global $db;

        $result = mysqli_query($db, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}
    function tambah($data) {
        global $db;

        $username = htmlspecialchars($data["username"]);
        $fullname = htmlspecialchars($data["fullname"]);
        $password = htmlspecialchars($data["password"]);
        $role = htmlspecialchars($data["role"]);

        $query = "INSERT INTO user
                VALUES
                ('','$username','$fullname','$password','$role'
                )";
        mysqli_query($db, $query);
        
        return mysqli_affected_rows($db);
    }
    function pesan($data) {
        global $db;

        $invoice = htmlspecialchars($data["invoice"]);
        $product_id = htmlspecialchars($data["product_id"]);
        $qty = htmlspecialchars($data["qty"]);
        $total = htmlspecialchars($data["total"]);

        $query = "INSERT INTO ordera 
                VALUES
                ('','$invoice','$product_id','$qty','$total')
        ";
        mysqli_query($db, $query);

        return mysqli_affected_rows($db);
    }
    function hapus($id) {
		global $db;

		mysqli_query($db, "DELETE FROM user WHERE id = $id");

		return mysqli_affected_rows($db);
	}
    function hapus1($id) {
        global $db;

        mysqli_query($db, "DELETE  FROM ordera WHERE id = $id");

        return mysqli_affected_rows($db);
    }
?>