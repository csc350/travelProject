<?php

require('C:/xampp/mysqli_connect.php'); 

// Start XML file, create parent node

$dom = new DOMDocument("1.0");
$node = $dom->createElement("travel_location");
$parnode = $dom->appendChild($node);

// Select all the rows in the travel_location table

$query = "SELECT * FROM travel_location WHERE 1";
$result = mysqli_query($dbc, $query);
if (!$result) {
  die('Invalid query: ' . mysqli_error($dbc));
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