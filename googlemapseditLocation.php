<?php
require('C:/xampp/mysqli_connect.php'); 

// Gets data from URL parameters.
$id = $_GET['id'];
$title = $_GET['title'];

// Inserts new row with place data.
$query = "UPDATE travel_location SET title='$title' WHERE travel_location_id=$id;";
$result = mysqli_query($dbc, $query);

if (!$result) {
  die('Invalid query: ' . mysqli_error($dbc));
}

?>