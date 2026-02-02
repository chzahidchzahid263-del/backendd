<?php
include("../config/db.php");
if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit;
}

$result = $conn->query("SELECT * FROM orders ORDER BY id DESC");
?>

<h2>Orders</h2>
<table border="1">
<tr>
<th>Name</th><th>CNIC</th><th>Product</th><th>Qty</th><th>Status</th>
</tr>
<?php while($row=$result->fetch_assoc()){ ?>
<tr>
<td><?= $row['name'] ?></td>
<td><?= $row['cnic'] ?></td>
<td><?= $row['product_name'] ?></td>
<td><?= $row['quantity'] ?></td>
<td><?= $row['status'] ?></td>
</tr>
<?php } ?>
</table>
<a href="logout.php">Logout</a>
