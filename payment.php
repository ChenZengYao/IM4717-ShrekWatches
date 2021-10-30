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
  <div class="container" style="margin-right:150px;">
    <h2>Shopping Cart</h2>
    <!-- table header -->
    <div class="container-table">
      <ul class="responsive-table">
        <li class="table-header">
          <div class="col col-2">Brand</div>
          <div class="col col-3">Product Name</div>
          <div class="col col-4">Price</div>
        </li>
<?php
$array = array();
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    array_push($array, $row["product_id"]);
    echo"<li class='table-row'>
            <div class='col col-2' data-label='Brand'> {$row["product_brand"]} </div>
            <div class='col col-3' data-label='Product Name'> {$row["product_name"]} </div>
            <div class='col col-4' data-label='Price'>$ {$row["price"]} </div>
          </li>";
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

//print total sum
  echo "<li class='table-row' style='background-color: #95A5A6;'>
          <div class='col col-2'><strong>Total:</strong></div>
          <div class='col col-3'></div>
          <div class='col col-4'><strong>$ {$totalsum}</strong> </div>
        </li>
      </ul>
    </div>
  </div>";

?>

  <div class="container" style="margin-right:150px;">
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
      
    </form>
  </div>
</div>

<?php
$dbcnx->close();
?>


<footer></footer>
<script src="js/footer.js"></script>
<script src="js/payment.js"></script>
</html>
