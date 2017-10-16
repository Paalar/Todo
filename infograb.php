<?php
$servername = "localhost";
$username = "monitor";
$password = "Edward03";
$dbname = "todo";

$mysqli = mysqli_connect($servername, $username, $password, $dbname);

$result = $mysqli->query("SELECT * FROM info");

echo '<html><body>
<form action="mysqlpost.php" method="POST">
Name: <input type="text" name="name"><br>
Todo: <input type="text" name="todo"><br>
<input type="submit">
</form>
</body></html>';


foreach($result as $row) {
        foreach($row as $column) {
                if($column  !=  NULL) {
                        echo($column . "\n");
                } else {
                        echo ("NULL\n");
                }
        }
echo "<br>";
}


?>
