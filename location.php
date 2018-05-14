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
<h1>Location Description</h1
 <div style="text-align:center;">
    <fieldset>
	<form action="location_validation.php" method="POST">
	  <legend style="text-align:center;">
		<font size="12">
	    Information
		</font>
	  </legend>
	  <div style="text-align:center">
	  <label> Name of Location: <br/>
	  <input type="text" name="location" /></label><br/>
	  <br/>
	  
	  <input type="file" name="pic" accept="image/*">
	  
	  
	  <p>Please select the season: <br/>
	  <input type="radio" name="season" value="spring" checked="checked"/>Spring
	  <input type="radio" name="season" value="fall" />Fall
	  <input type="radio" name="season" value="summer"/>Summer
	  <input type="radio" name="season" value="winter" />Winter
	  </p>
	  
	  
	  
	  
	  <p>Enter a brief description of the location: </p>
	  <textarea name="comments" cols="20" rows="4"> Enter your comments..</textarea>
	  
	  <p>Enter a brief description of the weather:</p>
	  <textarea name="comments" cols="20" rows="4"> what is the weather like...</textarea>
	  
	  <p>Enter a the best place to go when traveling to that location:</p>
	  <textarea name="comments" cols="20" rows="4"> what is the weather like...</textarea>
	  

	  <br/>
	  <input type="submit" value="submit"/>
	  </div>
	  
	</form>  
	</fieldset>
	<div>

</body>
 <!--include the footer--> 
	<p><?php include ('./include/footer.html'); ?> </p>
</html>