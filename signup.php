<?php // register.php
include "dbconnect.php";

    echo "<script>";

    if (isset($_POST['submit'])) {
      if (empty($_POST['username']) || empty ($_POST['password'])
        || empty ($_POST['email']) || empty ($_POST['tel'])) {
      echo "All records to be filled in";
      exit;}
      }

      $username = $_POST['username'];
      $password = $_POST['password'];
      $email = $_POST['email'];
      $tel = $_POST['tel'];

      $password = md5($password);

      $sql = "INSERT INTO shrek_users (username, password, email, tel) VALUES ('".$username."', '".$password."', '".$email."', '".$tel."')";
      $result = $dbcnx->query($sql);

      if (!$result)
      	echo "Your query failed.";
      else
        echo "alert('Welcome $username, you have registered successfully. Please sign in.');";
        echo 'window.location.href = "authmain.php";';
        echo '</script>';
?>
