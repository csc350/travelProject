<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="description" content="Travel website">
	<meta name="keywords" content="travel, trip plan">
  	<meta name="author" content="CSC 350 Team">
    <title>Your Trip | Welcome</title>
	<link rel="stylesheet" href="./css/users_style.css" >
	<link rel="stylesheet" href="./css/header_style.css">
	<link rel="stylesheet" href="./css/footer_style.css">
  </head>
  <body>
  <!--include the header--> 
    <p><?php include ('./include/header.html'); ?></p>
  
   <div id="header" style="text-align:center;">
   <h1>Welcome back!<h1>
	<div id="nav">
		<ul>
		 <li><a href="AccountInfo.php">Info</a><li>
		 <li><a href="TravelHistory.php">Travel History</a><li>
		 <li><a href="PlanningPage.php">Trip Planning Page</a><li>
		 <li><a href="Locations.php">Locations</a><li>
		</ul>
    </div>	
  </div>
  
  <div id="content" style="text-align:center;">
    <div id="feature">
		<p>feature</p>
	</div>
	<div class="article column1">
		<p>Column one</p>
	</div>
	
	<div class="article column2">
		<p>Column two</p>
	</div>
	
	<div class="article column3">
		<p>Column three</p>
	</div>
  </div>	
  <!--include the footer--> 
	<p><?php include ('./include/footer.html'); ?> </p>
  </body>
<html>