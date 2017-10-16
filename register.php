<?php
require "init.php";

$username = "Pål";
$password = "12345";
$email = "test@test.com";

$sql_query = "insert into users(username, password) values('$username', '$password');";

if (mysqli_query($con, $sql_query)) {
  echo("<p>
  Succesfully added
  </p>");
} else {
  echo("Not possible to insert");
}

 ?>
