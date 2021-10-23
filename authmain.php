<?php
include "dbconnect.php";
session_start();

if (isset($_POST['userid']) && isset($_POST['password']))
{
  // if the user has just tried to log in
  $userid = $_POST['userid'];
  $password = $_POST['password'];

  //select from database
  $password = md5($password);
  $query = 'select * from shrek_users '
             ."where username='$userid' "
             ." and password='$password'";
  // echo "<br>" .$query. "<br>";
    $result = $dbcnx->query($query);
    if ($result->num_rows >0 )
    {
      // if they are in the database register the user id as current session
      $_SESSION['valid_user'] = $userid;

      while($row = $result->fetch_assoc()) {
        $_SESSION['customer_id'] = $row["customer_id"];
      }
    }

  $dbcnx->close();
}
?>

<body>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/signup.css">
<?php

  if (isset($_SESSION['valid_user']))
  {
    echo '<nav class="navbar-login"></nav>';
    echo '<script src="js/nav-login.js"></script>';
  }
  else {
    echo '<nav class="navbar"></nav>';
    echo '<script src="js/nav.js"></script>';
  }

  if (isset($_SESSION['valid_user']))
  {
    echo "<script>alert('Welcome $userid !');</script>";
    echo '<script>window.location.href = "index.php";</script>';
  }
  else
  {
    if (isset($userid))
    {
      // if they've tried and failed to log in
      echo 'Could not log you in.<br />';
    }
    else
    {
      // they have not tried to log in yet or have logged out
      //echo 'You are not logged in.<br />';
    }
  echo '<div class="form">
      <div class="container">
        <img src="assets/shreklogo.png" class="formlogo" alt="">
        <p2>Login here</p2>

        <form action="authmain.php" method="post">
          <input type="text" name="userid" placeholder="username" style="margin-left: auto; margin-right: auto;">
          <input type="password" id="password" name="password" placeholder="password" style="margin-left: auto; margin-right: auto;">

          <button class="submit-btn" input type="submit" name="submit" style="margin-left: auto; margin-right: auto;">login now</button>
          <a href="signup.html" class="login-link">dont have an account? sign up for one now!</a>

      </div>
    </div>';
  }
  //   // provide form to log in
  //   echo '<form method="post" action="authmain.php">';
  //   echo '<table>';
  //   echo '<tr><td>Userid:</td>';
  //   echo '<td><input type="text" name="userid"></td></tr>';
  //   echo '<tr><td>Password:</td>';
  //   echo '<td><input type="password" name="password"></td></tr>';
  //   echo '<tr><td colspan="2" align="center">';
  //   echo '<input type="submit" value="Log in"></td></tr>';
  //   echo '</table></form>';
  // }
//}
?>
<footer></footer>
<script src="js/footer.js"></script>

</body>
