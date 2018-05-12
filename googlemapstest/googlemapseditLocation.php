<?php
require("phpsqlajax_dbinfo.php");
/*
Requires this database
CREATE TABLE travel_location
(
   	travel_location_id int NOT NULL AUTO_INCREMENT, 
	title text,
    coordinate_latitude float NOT NULL, 
	coordinate_longitude float NOT NULL
);

*/
// Gets data from URL parameters.
$id = $_GET['id'];
$title = $_GET['title'];

// Opens a connection to a mysqli server.
$connection=mysqli_connect ('localhost', $username, $password);
if (!$connection) {
  die('Not connected : ' . mysqli_error($connection));
}

// Sets the active mysqli database.
$db_selected = mysqli_select_db($connection, $database);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysqli_error($connection));
}

// Inserts new row with place data.
$query = "UPDATE travel_location SET title='$title' WHERE travel_location_id=$id;";
$result = mysqli_query($connection, $query);

if (!$result) {
  die('Invalid query: ' . mysqli_error($connection));
}

?>