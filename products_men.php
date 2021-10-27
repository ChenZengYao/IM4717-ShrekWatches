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
    <header class="hero-section-men">
        <!-- <div class="blur"> -->
            <div>
                <img src="assets/shreklogo_light.png" class="logo" alt="">
                <p class="sub-heading">Men's Collections</p>
            </div>
        <!-- </div> -->
    </header>
  <!-- Beset Selling cards container -->
    <section class="product">
        <div class="wrapper">
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <img src="assets/bs1.jpg" class="product-thumb" alt="">
                    <button class="card-btn"><a href="shoppingcart.php?product_id=1" class="link">add to cart</a></button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">CASIO G-SHOCK</h2>
                    <p class="product-short-des">CARBON CORE GA-2100-1ADR</p>
                    <span class="price">$250</span><span class="actual-price">$400</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <img src="assets/bs5.jpg" class="product-thumb" alt="">
                    <button class="card-btn"><a href="shoppingcart.php?product_id=5" class="link">add to cart</a></button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">SEIKO</h2>
                    <p class="product-short-des">SRPD53K1</p>
                    <span class="price">$250</span><span class="actual-price">$400</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <img src="assets/bs6.jpg" class="product-thumb" alt="">
                    <button class="card-btn"><a href="shoppingcart.php?product_id=6" class="link">add to cart</a></button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">SEIKO</h2>
                    <p class="product-short-des">SRPD65K1</p>
                    <span class="price">$250</span><span class="actual-price">$400</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">new!</span>
                    <img src="assets/le1.jpg" class="product-thumb" alt="">
                    <button class="card-btn"><a href="shoppingcart.php?product_id=9" class="link">add to cart</a></button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">TISSOT</h2>
                    <p class="product-short-des">SEASTAR 2000 PROFESSIONAL POWERMATIC 80 T1206071104100</p>
                    <span class="price">$250</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">new!</span>
                    <img src="assets/le4.jpg" class="product-thumb" alt="">
                    <button class="card-btn"><a href="shoppingcart.php?product_id=12" class="link">add to cart</a></button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">TISSOT</h2>
                    <p class="product-short-des">SEASTAR 2000 PROFESSIONAL POWERMATIC 80 T1206071104101</p>
                    <span class="price">$250</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">new!</span>
                    <img src="assets/le6.jpg" class="product-thumb" alt="">
                    <button class="card-btn"><a href="shoppingcart.php?product_id=14" class="link">add to cart</a></button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">SEIKO</h2>
                    <p class="product-short-des">LIMITED EDITION 6,500PCS GAARA "NARUTO SERIES" SRPF71K1</p>
                    <span class="price">$250</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">new!</span>
                    <img src="assets/le7.jpg" class="product-thumb" alt="">
                    <button class="card-btn"><a href="shoppingcart.php?product_id=15" class="link">add to cart</a></button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">CASIO G-SHOCK</h2>
                    <p class="product-short-des">CARBON CORE "CASIOAK" GA-2100SU-1ADR</p>
                    <span class="price">$250</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">new!</span>
                    <img src="assets/le8.jpg" class="product-thumb" alt="">
                    <button class="card-btn"><a href="shoppingcart.php?product_id=16" class="link">add to cart</a></button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">SEIKO</h2>
                    <p class="product-short-des">LIMITED EDITION 6,500PCS LEE "NARUTO SERIES" SRPF73K1</p>
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
