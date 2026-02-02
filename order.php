<?php
include("../config/db.php");

if(isset($_POST['submit'])){
$name=$_POST['name'];
$cnic=$_POST['cnic'];
$location=$_POST['location'];
$product=$_POST['product'];
$qty=$_POST['quantity'];

$stmt=$conn->prepare("INSERT INTO orders(name,cnic,location,product_name,quantity) VALUES(?,?,?,?,?)");
$stmt->bind_param("ssssi",$name,$cnic,$location,$product,$qty);
$stmt->execute();

$whatsapp="923188215202";
$msg=urlencode("New Order: $product x$qty\nName:$name\nLocation:$location");
header("Location:https://wa.me/$whatsapp?text=$msg");
}
?>
<form method="post">
<input name="name" placeholder="Name" required>
<input name="cnic" placeholder="CNIC" required>
<input name="location" placeholder="Location" required>
<input name="product" placeholder="Product" required>
<input name="quantity" type="number" required>
<button name="submit">Order Now</button>
</form>
