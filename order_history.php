<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, inital-scale=1.0">
</head>

<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/shoppingcart.css">
<link rel="stylesheet" href="css/signup.css">

<?php
include "dbconnect.php";
session_start();

$customerid = $_SESSION['customer_id'];

echo '<nav class="navbar-login"></nav>';
echo '<script src="js/nav-login.js"></script>';

$query = 'select * from purchaseditems' ." where customer_id = '$customerid'";
$result = $dbcnx->query($query);
?>

<div class="logocontainer">
  <img src="assets/shreklogo.png" class="formlogo">
</div>
<div class="shoppingbg" style="padding-bottom:50px;">
    <h2 style="padding-top:10px;">Order History</h2>
  <table border = "1" class='center-items'>
    <thead>
      <tr>
        <th>Date</th>
        <th>Brand</th>
        <th>Product Name</th>
        <th>Price</th>
      </tr>
    </thead>
<?php

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>
            <td> {$row["date"]} </td>
            <td> {$row["product_brand"]} </td>
            <td> {$row["product_name"]} </td>
            <td>$ {$row["price"]} </td>
          </tr>";
  }
}
echo '</table></div>';
$dbcnx->close();
?>

<footer></footer>
<script src="js/footer.js"></script>
</html>
