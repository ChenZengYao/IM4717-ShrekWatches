<?php // register.php
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

if (isset($_POST['submit'])) {
	if (empty($_POST['name']) || empty ($_POST['password'])
		|| empty ($_POST['email']) || empty ($_POST['tel'])) {
	echo "All records to be filled in";
	exit;}
	}
$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];
$tel = $_POST['tel'];

// echo ("$username" . "<br />". "$password2" . "<br />");
$password = md5($password);
// echo $password;
$sql = "INSERT INTO shrek_users (name, password, email, tel)
		VALUES ('$name', '$password', '$email', '$tel')";
//	echo "<br>". $sql. "<br>";
$result = $dbcnx->query($sql);

if (!$result)
	echo "Your query failed.";
else
	echo "Welcome ". $name . ". You are now registered";

  mysqli_close($conn);
}

?>