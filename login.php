<?php
require "init.php";
$username = $_POST["loginUsername"];
$password = $_POST["loginPassword"];

$sql_query = "select username from users where username = '$username' and password = '$password';";
$result = mysqli_query($con, $sql_query);

if ($result->num_rows > 0) {
$row = mysqli_fetch_assoc($result);
$name = $row["username"];
echo("Login complete. Welcome ".$name);
} else {
  echo("Login failed");
}

 ?>
