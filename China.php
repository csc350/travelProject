<html>
<head>
      <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="description" content="Travel website">
	<meta name="keywords" content="travel, trip plan">
  	<meta name="author" content="CSC 350 Team">
    <title>Your Trip | Welcome</title>
	<link rel="stylesheet" href="./css/header_style.css" >
	<link rel="stylesheet" href="./css/footer_style.css">
	<link rel="stylesheet" href="./css/China_stylesheet.css">
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
  <h1>China</h1>
<div class="raw1">
    <div class="place city1">
	   <img src = "http://cdn1.theodysseyonline.com/files/2015/03/01/635608437592578724-1285367276_Beijing-China-real-estate-market.jpg" alt ="Beijing" width = "300" height ="225">
	   <br/>
	   <a href="https://www.travelchinaguide.com/cityguides/beijing.htm">Beijing</a>
	</div>
	
	<div class="place city2">
	   <img src="https://saigonsays.files.wordpress.com/2014/04/shanghai-skyline.jpg" alt ="Shanghai"width = "300" height = "225"> 
	   <br/>
	   <a href="https://www.travelchinaguide.com/cityguides/shanghai.htm">Shanghai</a>
	</div>
</div>  
<div class="raw1">
	<div class="places cities1">
	   <img src ="http://paradiseintheworld.com/wp-content/uploads/2012/04/guangzhou.jpg"alt ="Guangzhou" width ="300" height="225" > 
	   <br/>
	   <a href="https://www.travelchinaguide.com/cityguides/guangzhou.htm">Guangzhou</a>
	</div>
	
	<div class="places cities2">
	   <img src="http://paradiseintheworld.com/wp-content/uploads/2012/05/Chengdu-Hotels.jpg" alt ="Chengdu"width ="300" height="225"> 
	   <br/>
	   <a href="https://www.travelchinaguide.com/cityguides/chengdu.htm">Chengdu</a>
	</div>
	
	<div class="places cities3">
	   <img src="https://fm.cnbc.com/applications/cnbc.com/resources/img/editorial/2015/05/20/102696502-hangzhou.1910x1000.jpg" alt ="Hangzhou" width="300" height="225"> 
	   <br/>
	   <a href="https://www.travelchinaguide.com/cityguides/hangzhou.htm">Hangzhou </a>	
</div>
 </body>

</html> 
