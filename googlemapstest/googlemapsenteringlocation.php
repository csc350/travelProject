<?php
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
require("phpsqlajax_dbinfo.php");

// Gets data from URL parameters.
$title = $_GET['title'];
$latitude = $_GET['latitude'];
$longitude = $_GET['longitude'];

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
$query = sprintf("INSERT INTO travel_location " .
         " (title, latitude, longitude) " .
         " VALUES ('%s', '%s', '%s');",
         $title,
         $latitude,
         $longitude);

$result = mysqli_query($connection, $query);

if (!$result) {
  die('Invalid query: ' . mysqli_error($connection));
}

?>