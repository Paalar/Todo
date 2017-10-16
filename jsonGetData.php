<?php
$servername = "localhost";
$sqlUser = "monitor";
$password = "Edward03";
$dbname = "info";

$con = mysqli_connect($servername, $username, $password, $dbname);

$username = $_POST["username"];
$sql_query = "select * from info where username = '$username';";

$result = mysqli_query($con, $sql_query);

$response = array();

while ($row = mysqli_fetch_array($result)) {
  array_push($response, array("ID"=>$row[0], "date"=>$row[1], "time"=>$row[2], "todoText"=>$row[3], "name"=>$row[4], "username"=>$row[5]));
}

echo json_encode(array("serverResponse"=>$response));

mysqli_close($con);
 ?>
