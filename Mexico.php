<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="description" content="Travel website">
	<meta name="keywords" content="travel, trip plan">
  	<meta name="author" content="CSC 350 Team">
    <title>Your Trip | Welcome</title>
	<link rel="stylesheet" href="./css/Mexico_stylesheet.css" >
	<link rel="stylesheet" href="./css/header_style.css">
	<link rel="stylesheet" href="./css/footer_style.css">
  </head>


 <body link="black">
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
 
  <h1>Mexico</h1>
<div class="raw1">
    <div class="place city1">
	   <img src="http://www.mendaily.com/wp-content/uploads/2012/11/Mexico-City-Metropolitan-Cathedral.jpg"alt ="Mexico City"width = "300" height = "225" > 
	   <br/>
	   
	   <a href="https://www.mexicocity.com/"><p style color="yellow">Mexico City</p></a>
	   
	</div>
	
	<div class="place city2">
	   <img src="http://www.linguaschools.com/blog/wp-content/uploads/2015/12/546b891b24799.jpg " alt ="Guanajuato" width = "300" height = "225"> 
	   <br/>
	   <a href="https://www.lonelyplanet.com/mexico/northern-central-highlands/guanajuato">Guanajuato</a>
	</div>
</div>  
<div class="raw2">
	<div class="places cities1">
	   <img src="https://i1.wp.com/justacarryon.com/wp-content/uploads/2015/07/Screen-Shot-2015-07-02-at-7.42.21-PM.png?resize=777%2C445 " alt ="Merida" width = "300" height = "225">  
	   <br/>
	   <a href="https://www.lonelyplanet.com/mexico/yucatan-peninsula/merida">Merida</a>
	</div>
	
	<div class="places cities2">
	   <img src="https://i.ytimg.com/vi/316sRicTa3I/maxresdefault.jpg " alt ="Acapulco" width = "300" height = "225">  
	   <br/>
	   <a href="https://www.visitmexico.com/en/main-destinations/guerrero/acapulco">Acapulco</a>
	</div>
	
	<div class="places cities3">
	   <img src=" http://1.bp.blogspot.com/-MKfoA2DacuI/UVKZUcC6R5I/AAAAAAAAAzQ/svyLw3OnBWk/s1600/Cancun+Mexico+2013.jpg" alt ="Cancun" width = "300" height = "225"> 
	   <br/>
	   <a href="https://www.lonelyplanet.com/mexico/cancun"> Cancun </a>	
</div>


 </body>
</html> 
