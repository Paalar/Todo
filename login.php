<?php
require "init.php";
$username = "Pål";
$password = "12345";

$sql_query = "select name from users where username = '$username' and password = '$password';";
$result = mysqli_query($con, $sql_query);

if ($result->num_rows > 0) {
$row = mysqli_fetch_assoc($result);
$name = $row["name"];
echo("Welcome ".$name);
} else {
  echo("No info is available");
}

 ?>
