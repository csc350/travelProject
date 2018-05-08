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
    <p><?php include ('./include/header.html'); ?></p>
  
   <div style="text-align:center;">
    <fieldset>
	<form action="login_validation.php" method="GET">
	  <legend>
		<font size="12">
	    Login
		</font>
	  </legend>

	  <p>Username:
		<input type="text" name="username" size="15"
			maxlength="30" />
	  </p>
	  
	  <p>Password:
		<input type="password" name="password" size="15"
			maxlength="30" />
	  </p>
	  <input type="submit" value="submit"/>
	<a href="resetPassword.php"><br/>Forgot your password?  Click here to reset.</a>
	<a> Note to developers: we will be implementing Ajax(?) to allow for Admin logins through THIS PAGE! </a>
	</form>  
	</fieldset>
   </div>
   <!--include the footer--> 
	<p><?php include ('./include/footer.html'); ?> </p>
  </body>
</html>
