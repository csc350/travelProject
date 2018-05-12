<?php
require("phpsqlajax_dbinfo.php");
// Get parameters from URL
$center_latitude = $_GET["latitude"];
$center_longitude = $_GET["longitude"];
$radius = 20;
// Start XML file, create parent node
$dom = new DOMDocument("1.0");
$node = $dom->createElement("travel_location");
$parnode = $dom->appendChild($node);
// Opens a connection to a mysqli server
$connection=mysqli_connect ('localhost', $username, $password);
if (!$connection) {
  die("Not connected : " . mysqli_error());
}
// Set the active mysqli database
$db_selected = mysqli_select_db($connection, $database);
if (!$db_selected) {
  die ("Can\'t use db : " . mysqli_error($connection));
}
// Search the rows in the travel_location table
$query = sprintf("SELECT travel_location_id, title, latitude, longitude, ( 3959 * acos( cos( radians('%s') ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians('%s') ) + sin( radians('%s') ) * sin( radians( latitude ) ) ) ) AS distance FROM travel_location HAVING distance < '%s' ORDER BY distance LIMIT 0 , 20",
  $center_latitude,
  $center_longitude,
  $center_latitude,
  $radius);
$result = mysqli_query($connection, $query);
$result = mysqli_query($connection, $query);
if (!$result) {
  die("Invalid query: " . mysqli_error($connection));
}
header("Content-type: text/xml");
// Iterate through the rows, adding XML nodes for each
while ($row = @mysqli_fetch_assoc($result)){
  $node = $dom->createElement("travel_location");
  $newnode = $parnode->appendChild($node);
  $newnode->setAttribute("travel_location_id", $row['travel_location_id']);
  $newnode->setAttribute("title", $row['title']);
  $newnode->setAttribute("latitude", $row['latitude']);
  $newnode->setAttribute("longitude", $row['longitude']);
  $newnode->setAttribute("distance", $row['distance']);
}
echo $dom->saveXML();
?>