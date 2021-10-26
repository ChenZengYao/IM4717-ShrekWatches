<link rel="stylesheet" href="css/home.css">
<?php
include "dbconnect.php";
session_start();

$userid = $_SESSION['valid_user'];
$customerid = $_SESSION['customer_id'];

if (!isset($userid)){
  echo '<script>window.location.href = "authmain.php";</script>';
}

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
 <table border = "1" style = 'margin-left: auto; margin-right: auto;'>
   <thead>
    <tr>
      <th>Brand</th>
      <th>Product Name</th>
      <th>Price</th>
     </tr>
<?php

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>
            <td> {$row["product_brand"]} </td>
            <td> {$row["product_name"]} </td>
            <td>$ {$row["price"]} </td>
          </tr>";
  }
}

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
      </table>";

if (isset($_GET['click'])) {
  $query6 = 'DELETE FROM shoppingcart' . " WHERE customer_id = '$customerid'";
  $result = $dbcnx->query($query6);
  unset($_GET['click']);
  echo '<script> window.location.href = "shoppingcart.php" </script>';
}

echo "<button class='button'><a href='shoppingcart.php?click=true'>Clear Cart</a></button>
    <button class='button'><a href='payment.php'>Proceed to Payment</a></button>";

$dbcnx->close();
?>

<footer></footer>
<script src="js/footer.js"></script>
