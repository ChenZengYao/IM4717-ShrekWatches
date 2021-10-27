<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, inital-scale=1.0">
  <title>Shrek Watches - Shop Watches Online</title>
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/products.css">
</head>

<?php
session_start();
$userid = $_SESSION['valid_user'];

if (isset($userid))
{
  echo '<nav class="navbar-login"></nav>';
  echo '<script src="js/nav-login.js"></script>';
}
else {
  echo '<nav class="navbar"></nav>';
  echo '<script src="js/nav.js"></script>';
}
?>

<body>

  <!-- hero section -->
    <header class="hero-section">
        <!-- <div class="blur"> -->
            <div>
                <img src="assets/shreklogo_light.png" class="logo" alt="">
                <p class="sub-heading">Shop Watches Online</p>
            </div>
        <!-- </div> -->
    </header>
    <h1>Women's Collections</h1>
  <!-- Beset Selling cards container -->
    <section class="product">
        <div class="wrapper">
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <img src="assets/bs2.jpg" class="product-thumb" alt="">
                    <button class="card-btn"><a href="shoppingcart.php?product_id=2" class="link">add to cart</a></button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">CASIO G-SHOCK</h2>
                    <p class="product-short-des">CARBON CORE GA-2110SU-3ADR</p>
                    <span class="price">$250</span><span class="actual-price">$400</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <img src="assets/bs3.jpg" class="product-thumb" alt="">
                    <button class="card-btn"><a href="shoppingcart.php?product_id=3" class="link">add to cart</a></button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">FOSSIL</h2>
                    <p class="product-short-des">ES4572</p>
                    <span class="price">$250</span><span class="actual-price">$400</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <img src="assets/bs4.jpg" class="product-thumb" alt="">
                    <button class="card-btn"><a href="shoppingcart.php?product_id=4" class="link">add to cart</a></button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">FOSSIL</h2>
                    <p class="product-short-des">ES3545</p>
                    <span class="price">$250</span><span class="actual-price">$400</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <img src="assets/bs7.jpg" class="product-thumb" alt="">
                    <button class="card-btn"><a href="shoppingcart.php?product_id=7" class="link">add to cart</a></button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">TISSOT</h2>
                    <p class="product-short-des">SEASTAR 1000 CHRONOGRAPH T1204173705100</p>
                    <span class="price">$250</span><span class="actual-price">$400</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <img src="assets/bs8.jpg" class="product-thumb" alt="">
                    <button class="card-btn"><a href="shoppingcart.php?product_id=8" class="link">add to cart</a></button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">TISSOT</h2>
                    <p class="product-short-des">TRADITION CHRONOGRAPH T0636173603700</p>
                    <span class="price">$250</span><span class="actual-price">$400</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">new!</span>
                    <img src="assets/le2.jpg" class="product-thumb" alt="">
                    <button class="card-btn"><a href="shoppingcart.php?product_id=10" class="link">add to cart</a></button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">FOSSIL</h2>
                    <p class="product-short-des">ES2830</p>
                    <span class="price">$250</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">new!</span>
                    <img src="assets/le3.jpg" class="product-thumb" alt="">
                    <button class="card-btn"><a href="shoppingcart.php?product_id=11" class="link">add to cart</a></button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">CASIO G-SHOCK</h2>
                    <p class="product-short-des">CARBON CORE "CASIOAK" GA-2100-4ADR</p>
                    <span class="price">$250</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">new!</span>
                    <img src="assets/le5.jpg" class="product-thumb" alt="">
                    <button class="card-btn"><a href="shoppingcart.php?product_id=13" class="link">add to cart</a></button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">FOSSIL</h2>
                    <p class="product-short-des">CH2600IE</p>
                    <span class="price">$250</span>
                </div>
            </div>
        </div>
    </section>

    <footer></footer>
    <script src="js/footer.js"></script>
    <script src="js/home.js"></script>

</body>
</html>
