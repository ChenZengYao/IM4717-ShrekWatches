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
<link rel="stylesheet" href="css/table.css">

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
  <!-- table header -->
  <div class="container-table">
    <ul class="responsive-table">
      <li class="table-header">
        <div class="col col-1">Date</div>
        <div class="col col-2">Brand</div>
        <div class="col col-3">Product Name</div>
        <div class="col col-4">Price</div>
      </li>
<?php

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo"<li class='table-row'>
          <div class='col col-1'> {$row["date"]} </div>
          <div class='col col-2'> {$row["product_brand"]} </div>
          <div class='col col-3'> {$row["product_name"]} </div>
          <div class='col col-4'>$ {$row["price"]} </div>
        </li>";
  }
}
echo '</ul></div></div>';
$dbcnx->close();
?>

<footer></footer>
<script src="js/footer.js"></script>
</html>
