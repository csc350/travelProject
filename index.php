<?php   session_start(); ?>

<html>
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="description" content="Travel website">
	<meta name="keywords" content="travel, trip plan">
  	<meta name="author" content="CSC 350 Team">
    <title>Your Trip | Welcome</title>
	<link rel="stylesheet" href="./css/header_style.css">
	<link rel="stylesheet" href="./css/footer_style.css">
  </head>
  
  <body>
    <!--include the header--> 
	 <p><?php 
	    // echo $_SESSION['user_id']; 
	     if (!isset($_SESSION['user_id'])){ 
		 
		     include ('./include/header.html');
		 }
		 else
		 {
			 include ('./include/header_user.html'); 
		 }
	?></p>

<style>
* {
    box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column {
    float: left;
    width: 33.33%;
    padding: 10px;
   
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
</style>
<div style="text-align:center;">
<img src="https://media.giphy.com/media/XshavtISo6XVS/giphy.gif" alt="Map" style="width:500px;height:300px;">
				
				<p style="font-size:160%;" style="font-family:verdana;"> Travel where ever when ever!!!</p>
				<div style="font-family:courier;">
				<font size="6">
				<p> Explore the world </p>
				<p> Travel with friends or family members</p>
				<p> What are you waiting for?</p>
				<a href="SignUp.php">SignUp</a>
				<p> The world awaits your exploring! </p>
				</font>
				</div>
</div>

<div class="row">
  <div class="column" style="background-color:#aaa;">
    <img src="https://walkjapan.com/application/files/5514/5570/5986/hero-slide-japan.jpg" alt="Japan" style="width:500px;height:400px;">
	<h2 style="text-align:center;">Japan</h2>
  </div>
  <div class="column" style="background-color:#bbb;">
    <img src="https://www.visitmexico.com/sites/default/files/styles/extralarge/public/field/image/df_header_3.jpg?itok=cdbU-6Vf" alt="Mexico" style="width:500px;height:400px;">
	<h2 style="text-align:center;">Mexico</h2>
  </div>
  <div class="column" style="background-color:#ccc;">
    <img src="https://cdn.londonandpartners.com/visit/london-organisations/houses-of-parliament/63950-640x360-london-icons2-640.jpg" alt="London" style="width:500px;height:400px;">
	<h2 style="text-align:center;">The UK</h2>
  </div>
  
  <br/>
</div>
    <!--include the footer--> 
	<p><?php include ('./include/footer.html'); ?> </p>
  </body>
</html>
