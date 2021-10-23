<?php
  session_start();

  // store to test if they *were* logged in
  $old_user = $_SESSION['valid_user'];
  unset($_SESSION['valid_user']);
  session_destroy();
?>
<html>
<body>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/signup.css">
    <nav class="navbar"></nav>
<?php
  if (!empty($old_user))
  {
    echo '<script> window.location.href = "index.php" </script>';
  }
  else
  {
    // if they weren't logged in but came to this page somehow
    echo 'You were not logged in, and so have not been logged out.<br />';
  }
?>
<script src="js/nav.js"></script>
<footer></footer>
<script src="js/footer.js"></script>

</body>
</html>
