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
	<link rel="stylesheet" href="./css/Belarus_stylesheet.css">
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
  <h1>Belarus</h1>
<div class="raw1">
    <div class="place city1">
	   <img src = "http://www.minsk.nemiga.info/gorod/prospekt_pobediteley.jpg" alt ="Minsk" width = "300" height ="225">
	   <br/>
	   <a href="http://www.belarus.by/en/travel/belarus-life/minsk-attractions">Minsk</a>
	</div>
	
	<div class="place city2">
	   <img src="http://album.foto.ru/photos/or/471530/3974725.jpg" alt ="Lida" width = "300" height = "225"> 
	   <br/>
	   <a href="http://www.belarus.by/en/travel/belarus-life/lida-castle">Lida</a>
	</div>
</div>  

<div class="raw2">
	<div class="places cities1">
	   <img src ="https://ru1.anyfad.com/items/t1@adc7c208-9e00-4626-b3fb-10e79ac19230/Mirskiy-zamok.jpg"alt ="Mir" width ="300" height="225" > 
	   <br/>
	   <a href="http://www.belarus.by/en/travel/belarus-life/mir-castle">Mir</a>
	</div>
	
	<div class="places cities2">
	   <img src="https://www.repstatic.it/content/nazionale/img/2016/04/07/151934671-44e21eaf-5f15-4fcd-a991-c3380770efc2.jpg" alt ="Nesvizh"width ="300" height="225"> 
	   <br/>
	   <a href="http://www.belarus.by/en/travel/belarus-life/nesvizh-palace">Nesvizh</a>
	</div>
	
	<div class="places cities3">
	   <img src="http://blissway.by/wp-content/uploads/2015/09/polotsk-e1433877043982.jpg" alt ="Polotsk" width="300" height="225"> 
	   <br/>
	   <a href="http://www.belarus.by/en/travel/belarus-life/polotsk">Polotsk </a>	
</div>
 </body>
</html> 
