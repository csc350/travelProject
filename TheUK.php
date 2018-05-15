<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="description" content="Travel website">
	<meta name="keywords" content="travel, trip plan">
  	<meta name="author" content="CSC 350 Team">
    <title>Your Trip | Welcome</title>
	<link rel="stylesheet" href="./css/TheUK_stylesheet.css" >
	<link rel="stylesheet" href="./css/header_style.css">
	<link rel="stylesheet" href="./css/footer_style.css">
  </head>
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

 <body>
  <h1>The UK</h1>
<div class="raw1">
    <div class="place city1">
	   <img src = "http://1.bp.blogspot.com/-XLS55cgvt58/UFFQDyev96I/AAAAAAAAAJU/ZdfX-H9T09I/s1600/London+HD+Wallpapers.jpg" alt ="London" width = "300" height ="225">
	   <br/>
	   <a href="https://www.lonelyplanet.com/england/london">London</a>
	</div>
	
	
	<div class="place city2">
	   <img src="https://s.inyourpocket.com/gallery/108140.jpg" alt ="Belfast"width ="300" height="225"> 
	   <br/>
	   <a href="https://www.lonelyplanet.com/ireland/northern-ireland/belfast">Belfast</a>
	</div>
</div>  
<div class="raw1">
	<div class="places cities1">
	   <img src ="http://4.bp.blogspot.com/-p6_q7RzpQv0/UdQSSfcwMnI/AAAAAAAAarw/JgL96b39zys/s1600/edinburgh-calton_hill.jpg"alt ="Edinburgh" width ="300" height="225" > 
	   <br/>
	   <a href="https://www.lonelyplanet.com/scotland/edinburgh">Edinburgh</a>
	</div>
	<div class="places cities2">
	   <img src="http://51h2lc4n573ga5bh382hhw1s.wpengine.netdna-cdn.com/wp-content/uploads/2014/10/Cardiff-Castle-Keep-Sunny.jpg" alt ="Cardiff"width = "300" height = "225"> 
	   <br/>
	   <a href="http://www.visitwales.com/explore/south-wales/cardiff">Cardiff</a>
	</div>
	
	
	
	<div class="places cities3">
	   <img src="http://www.ukwanderer.com/wp-content/uploads/2014/01/Aerial-view-of-Albert-Square-gerry.scappaticci-Flickr.jpg" alt ="Manchester" width="300" height="225"> 
	   <br/>
	   <a href="https://www.visitmanchester.com/">Manchester</a>	
</div>
 </body>
</html>
