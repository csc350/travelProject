<html>
 <head>
	 <!--This is a comment-->
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
<form action="sign_up_validation.php" method = "post">
<fieldset>
	<font size="14">
	<legend>SignUp Form </legend>
	</font>
	<label>Username: <br/>
	<input type="text" name="user_name" /></label><br/>
	<label>First Name: <br/>
	<input type="text" name="first_name" /></label><br/>
	<label>Last Name: <br/>
	<input type="text" name="last_name" /></label><br/>
	<label>Password: <br/>
	<input type="password" name="password" /></label><br/>
	<label>Email: <br/>
	<input type="text" name="email" /></label><br/>
	<label>Phone #: <br/>
	<input type="number" name="phone" /></label><br/>
	
	<label for="DateofBirth">Date of Birth:</label><br/>
    <input type="date" name="DateofBirth"/>
   
</fieldset>




<input type="Submit" value="Submit"/>
</form>
</div>
   <!--include the footer--> 
	<p><?php include ('./include/footer.html'); ?> </p>
</body>
</html>
