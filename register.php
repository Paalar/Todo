<?php
require "init.php";

$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];

$sql_query = "insert into users(username, password, email) values('$username', '$password', '$email');";

if (mysqli_query($con, $sql_query)) {
  echo("<p>
  Succesfully added
  </p>");
} else {
  echo("Not possible to insert");
}

 ?>
