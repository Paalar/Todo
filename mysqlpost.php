<?php
header('Refresh: 2;url=infopost.php');
//Creating a connection to the local mysql server
$mysqli = mysqli_connect("localhost", "monitor", "Edward03", "todo");


$name = $_POST["name"]; // name, user input
$todoText = $_POST["todo"]; // todo text, user input
$myDate = getdate(date("U")); //date, generated when arriving on site.
$date = $myDate["year"] . "-" . $myDate["mon"] . "-" . $myDate["mday"]; //date, year-month-day
$time = $myDate["hours"]+2 . ":" . $myDate["minutes"] . ":" . $myDate["seconds"]; //time, hours-minutes-seconds

echo $date . "-" . $time;

//creates the SQL insert command
$toInsert = "INSERT INTO info (date, time, todoText, name) VALUES ('" . $date . "','" . $time ."','" . $todoText . "' , '" . $name . "')";


//tries to insert information to the server
if ($mysqli->query($toInsert) == TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error" . $mysqli->error;
}


?>
