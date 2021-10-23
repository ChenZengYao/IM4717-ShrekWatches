<?php
// register.php
//include "dbconnect.php";
if (!empty($_POST)) { // check if there is POST data. If not, do nothing.

  $servername = "localhost";
  $username = "f32ee";
  $password = "f32ee";
  $dbname = "f32ee";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
  }

  $success = true;
  $empty = true;
  $errorMsg = '';

  echo "<script>";

if (true) {
    if (isset($_POST['submit'])) {
      $empty = false;
      if (empty($_POST['username']) || empty ($_POST['password'])
        || empty ($_POST['email']) || empty ($_POST['tel'])) {
      echo "All records to be filled in";
      exit;}
      }

      $username = $_POST['username'];
      $password = $_POST['password'];
      $email = $_POST['email'];
      $tel = $_POST['tel'];

      // echo ("$username" . "<br />". "$password2" . "<br />");
      //TODO: put a catcher to catch empty form. follow menu.php from case study 4
      $password = md5($password);
      // echo $password;
      $sql = "INSERT INTO shrek_users (username, password, email, tel) VALUES ('".$username."', '".$password."', '".$email."', '".$tel."')";
      if (mysqli_query($conn, $sql)) {
        // insert operation successful
      } else {
        $success = false;
        $errorMsg .= "Error occurred: ".mysqli_error($conn)."\\n";
      }
    }

  //	echo "<br>". $sql. "<br>";
  //$result = $dbcnx->query($sql);

  // if (!$result)
  //   echo "Your query failed.";
  // else
  //   echo "Welcome ". $name . ". You are now registered";
  if ($empty) {
        echo "alert('Error');";
      } else if ($success) {
        echo "alert('Welcome $username, you have registered successfully');";
      } else {
        echo "alert(".$errorMsg."');";
      }
  echo "</script>";

  mysqli_close($conn);
}
?>
