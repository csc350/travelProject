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

// Start XML file, create parent node

$dom = new DOMDocument("1.0");
$node = $dom->createElement("travel_location");
$parnode = $dom->appendChild($node);

// Opens a connection to a mysqli server

$connection=mysqli_connect ('localhost', $username, $password);
if (!$connection) {  die('Not connected : ' . mysqli_error());}

// Set the active mysqli database

$db_selected = mysqli_select_db($connection, $database);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysqli_error());
}

// Select all the rows in the travel_location table

$query = "SELECT * FROM travel_location WHERE 1";
$result = mysqli_query($connection, $query);
if (!$result) {
  die('Invalid query: ' . mysqli_error($connection));
}

header("Content-type: text/xml");

// Iterate through the rows, adding XML nodes for each

while ($row = @mysqli_fetch_assoc($result)){
  // Add to XML document node
  $node = $dom->createElement("travel_location");
  $newnode = $parnode->appendChild($node);
  $newnode->setAttribute("travel_location_id",$row['travel_location_id']);
  $newnode->setAttribute("title",$row['title']);
  $newnode->setAttribute("latitude", $row['latitude']);
  $newnode->setAttribute("longitude", $row['longitude']);
}

echo $dom->saveXML();

?>