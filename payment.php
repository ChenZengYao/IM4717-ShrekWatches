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

$userid = $_SESSION['valid_user'];
$customerid = $_SESSION['customer_id'];

echo '<nav class="navbar-login"></nav>';
echo '<script src="js/nav-login.js"></script>';

$product_id=$_GET['product_id'];

// Query 1 - Product information that user has added to cart
$query = 'select * from products '
           ."where product_id='$product_id' ";

$result = $dbcnx->query($query);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $id = $row["product_id"];
    $brand = $row["product_brand"];
    $name = $row["product_name"];
    $amount = $row["price"];
  }
}

// Query 2 - Userid of user that is currently logged in
$query2 = 'select customer_id from shrek_users '
           ."where username='$userid' ";

$result = $dbcnx->query($query2);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $user_id = $row["customer_id"];
  }
}

// Query 3 - Inserting selected product in user's shopping cart
$query3 = "INSERT INTO shoppingcart(`customer_id`, `product_id`, `product_brand`, `product_name`, `price`) VALUES ($user_id, $id, '$brand', '$name', $amount)";
$result = $dbcnx->query($query3);

// Query 4 - Selecting all product from a certain user's shopping cart to display
$query4 = 'select * from shoppingcart '
           ."where customer_id='$customerid' ";

$result = $dbcnx->query($query4);

?>
<div class="logocontainer">
  <img src="assets/shreklogo.png" class="formlogo">
</div>
<div class="form">
  <div class="container" style="margin-right:100px;">
    <h2>Shopping Cart</h2>
  <table border = "1">
    <thead>
      <tr>
        <th>Brand</th>
        <th>Product Name</th>
        <th>Price</th>
      </tr>
    </thead>
<?php
$array = array();
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    array_push($array, $row["product_id"]);
    echo "<tr>
            <td> {$row["product_brand"]} </td>
            <td> {$row["product_name"]} </td>
            <td>$ {$row["price"]} </td>
          </tr>";
  }
}

$_SESSION['productsarray'] = $array;

$query5 = 'SELECT price FROM shoppingcart' . " WHERE customer_id = '$customerid'";
$result = $dbcnx->query($query5);
$totalsum = 0;
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $totalsum += $row['price'];
  }
}
$_SESSION['totalsum'] = $totalsum;

echo "<tr>
        <th align='right' colspan='2'>Total: </th>
        <td align='right'>$ {$totalsum}</td>
      </tr>
      </table>
      </div>";

?>

    <div class="container">
    <h2>Shipping Details</h2>

    <form action="update_shipping.php" method="post">
      <input type="text" id="name" name="name" oninput="validateName(this)" placeholder="name" required>
      <input type="email" id="email" name="email" onblur="validateEmail(this)" placeholder="email" required>
      <input type="text" id="tel" name="tel" onblur="validateTel(this)" placeholder="contact No." required>
      <input type="text" id="address" name="address" placeholder="shipping address" required>

      <input type="radio" id="Visa" name="payment_type" value="Visa" checked style="margin-left:75px;">
        <label for="Visa">Visa</label>
      <input type="radio" id="Mastercard" name="payment_type" value="Mastercard" style="margin-left:20px;">
        <label for="Mastercard">Mastercard</label>

      <input type="text" id="card_number" name="card_number" onblur="validateCardNumber(this)" placeholder="credit card number" required>
      <input type="text" id="card_expiry" name="card_expiry" onblur="validateCardExpiry(this)" placeholder="credit card expiry (MMYY)" required>
      <input type="text" id="card_cvv" name="card_cvv" onblur="validateCardCVV(this)" placeholder="credit card cvv" required>

      <input type="checkbox" checked class="checkbox" id="terms-and-cond" required>
        <label for="terms-and-cond">agree to our <a href="">terms and conditions</a></label><br>
      <input type="checkbox" class="checkbox" id="notification">
        <label for="notification">receive upcoming offers and events emails</label>
      <button class="submit-btn" input type="submit" name="submit" onclick="validateForm(event)">Make Payment</button>
    </div>
  </div>
</div>

<?php

// echo '<div class="form">
//     <div class="container">
//       <img src="assets/shreklogo.png" class="formlogo" alt="">
//       <p2>Shipping Information</p2>
//
//       <form action="" method="post">
//         <input type="text" name="name" placeholder="Name" style="margin-left: auto; margin-right: auto;">
//         <input type="email" name="email" placeholder="Email" style="margin-left: auto; margin-right: auto;">
//         <input type="text" name="contact" placeholder="Contact Number" style="margin-left: auto; margin-right: auto;">
//         <input type="text" name="address" placeholder="Shipping Address" style="margin-left: auto; margin-right: auto;">
//
//         <button class="submit-btn" input type="submit" name="submit" style="margin-left: auto; margin-right: auto;">Make Payment</button>
//     </div>
//   </div>';

$dbcnx->close();
?>


<footer></footer>
<script src="js/footer.js"></script>
<script src="js/payment.js"></script>
</html>
