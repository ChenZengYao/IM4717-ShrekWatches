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

$query2 = 'select customer_id from shrek_users '
           ."where username='$userid' ";

$result = $dbcnx->query($query2);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $user_id = $row["customer_id"];
  }
}

$query3 = "INSERT INTO shoppingcart(`customer_id`, `product_id`, `product_brand`, `product_name`, `price`) VALUES ($user_id, $id, '$brand', '$name', $amount)";
$result = $dbcnx->query($query3);

$query4 = 'select * from shoppingcart '
           ."where customer_id='$customerid' ";

$result = $dbcnx->query($query4);

   

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "product_brand: " . $row["product_brand"]. " product_name: " . $row["product_name"]. " " . $row["price"]. "<br>";
  }
}

//SELECT SUM( price ) FROM shoppingcart WHERE customer_id = $customerid;

//DELETE FROM `shoppingcart` WHERE customer_id = $customerid;

$dbcnx->close();
?>
 <table border = "1">
   <thead>
    <tr>
      <th>Brand</th>
      <th>Product Name</th>
      <th>Price</th>
     </tr>
     </thead>
     <tbody>
     <?php
        $totalsum = "SELECT SUM( price ) FROM shoppingcart WHERE customer_id = $customerid";
        for ($i = 0; $i < count($result); $i++){
          echo '<tr>';
          echo '<td>'.$row['product_brand']."<br></td>";
          echo '<td>' .$row["product_name"]. "<br></td>";
          echo '<td>' . $row["price"]."<br></td>";
          echo '</tr>';
        }
      ?>
   </tbody>
   <tfoot>
     <tr>
       <th align="right">Total:</th><br>
       <th align="right">$<?php echo number_format($totalsum, 2);?></th>
     </tr>
   </tfoot>
 </table>

<footer></footer>
<script src="js/footer.js"></script>
