<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, inital-scale=1.0">
  <title>Shrek Watches - Shop Watches Online</title>
  <link rel="stylesheet" href="css/home.css">
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

  <!-- Beset Selling cards container -->
  <section class="product">
    <h2 class="product-category">best selling</h2>
    <button class="pre-btn"><img src="assets/arrow.png" alt=""></button>
    <button class="nxt-btn"><img src="assets/arrow.png" alt=""></button>
    <div class="product-container">
      <div class="product-card">
          <div class="product-image">
              <span class="discount-tag">50% off</span>
              <img src="assets/bs1.jpg" class="product-thumb" alt="">
              <button class="card-btn"><a href="shoppingcart.php?product_id=1" class="link">add to cart</a></button>
          </div>
          <div class="product-info">
              <h2 class="product-brand">CASIO G-SHOCK</h2>
              <p class="product-short-des">CARBON CORE GA-2100-1ADR</p>
              <span class="price">$250</span><span class="actual-price">$500</span>
          </div>
      </div>
      <div class="product-card">
          <div class="product-image">
              <span class="discount-tag">50% off</span>
              <img src="assets/bs2.jpg" class="product-thumb" alt="">
              <button class="card-btn"><a href="shoppingcart.php?product_id=2" class="link">add to cart</a></button>
          </div>
          <div class="product-info">
              <h2 class="product-brand">CASIO G-SHOCK</h2>
              <p class="product-short-des">CARBON CORE GA-2110SU-3ADR</p>
              <span class="price">$200</span><span class="actual-price">$400</span>
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
              <span class="price">$300</span><span class="actual-price">$600</span>
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
              <span class="price">$300</span><span class="actual-price">$600</span>
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
              <span class="price">$200</span><span class="actual-price">$400</span>
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
              <span class="price">$250</span><span class="actual-price">$500</span>
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
              <span class="price">$400</span><span class="actual-price">$800</span>
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
              <span class="price">$450</span><span class="actual-price">$900</span>
          </div>
      </div>
    </div>
  </section>

  <!-- collections -->
    <!-- <section class="collection-container">
        <a href="products_women.php" class="collection">
          <img src="assets/collection_women.jpg" alt="">
          <p class="collection-title">women<br>watches</p>
        </a>
        <a href="products_men.php" class="collection">
          <img src="assets/collection_men.jpg" alt="">
          <p class="collection-title">men<br>watches</p>
        </a>
    </section> -->
    <section class="collection-container">
      <a href="#" class="collection">
          <img src="assets/collection_women.jpg" alt="">
          <p class="collection-title">women <br> watches</p>
      </a>
      <a href="#" class="collection">
          <img src="assets/collection_men.jpg" alt="">
          <p class="collection-title">men <br> watches</p>
      </a>
  </section>

  <!-- Limited Edition cards container -->
  <section class="product">
    <h2 class="product-category">newest editions</h2>
    <button class="pre-btn"><img src="assets/arrow.png" alt=""></button>
    <button class="nxt-btn"><img src="assets/arrow.png" alt=""></button>
    <div class="product-container">
      <div class="product-card">
          <div class="product-image">
              <span class="discount-tag">new!</span>
              <img src="assets/le1.jpg" class="product-thumb" alt="">
              <button class="card-btn"><a href="shoppingcart.php?product_id=9" class="link">add to cart</a></button>
          </div>
          <div class="product-info">
              <h2 class="product-brand">TISSOT</h2>
              <p class="product-short-des">SEASTAR 2000 PROFESSIONAL POWERMATIC 80 T1206071104100</p>
              <span class="price">$450</span>
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
              <span class="price">$150</span>
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
              <span class="price">$800</span>
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
              <span class="price">$200</span>
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
              <span class="price">$350</span>
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
              <span class="price">$150</span>
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
              <span class="price">$300</span>
          </div>
      </div>
    </div>
  </section>

  <footer></footer>
  <script src="js/footer.js"></script>
  <script src="js/home.js"></script>

</body>
</html>
