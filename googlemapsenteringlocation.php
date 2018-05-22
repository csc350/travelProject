<?php
require('C:/xampp/mysqli_connect.php'); 

// Gets data from URL parameters.
$title = $_GET['title'];
$latitude = $_GET['latitude'];
$longitude = $_GET['longitude'];

// Inserts new row with place data.
$query = sprintf("INSERT INTO travel_location " .
         " (title, latitude, longitude) " .
         " VALUES ('%s', '%s', '%s');",
         $title,
         $latitude,
         $longitude);

$result = mysqli_query($dbc, $query);

if (!$result) {
  die('Invalid query: ' . mysqli_error($dbc));
}

?>