<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
$user_id = $_SESSION['user_id'];

require('C:/xampp/mysqli_connect.php'); 

$location_id = $_GET['id'];
$travel_time = $_GET['travel_time'];
$travel_date = $_GET['travel_date'];

// Search the rows in the travel_location table
$query = sprintf("INSERT INTO travel_plan_location " .
         " (travel_date, travel_time, travel_location_id, travel_plan_id) " .
         " VALUES ('%s', '%s', '%s', '%s');",
         $travel_date,
         $travel_time,
         $location_id,
		 $user_id);
$result = mysqli_query($dbc, $query);
if (!$result) {
	die("Invalid query: " . mysqli_error($dbc));
}