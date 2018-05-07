<html>
 <head>
	 <---This is a comment--!>
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
	<font size="14">
	<legend>SignUp Form </legend>
	</font>
	<label>Username: <br/>
	<input type="text" name="Username" /></label><br/>
	<label>Password: <br/>
	<input type="password" name="Password" /></label><br/>
	<label>Age: <br/>
	<input type="text" name="Age" /></label><br/>
	<label>Email: <br/>
	<input type="text" name="Emailmail" /></label><br/>
	<label>Phone #: <br/>
	<input type="number" name="Phone" /></label><br/>
</fieldset>
<input type="Submit" value="Submit"/>
</div>
   <!--include the footer--> 
	<p><?php include ('./include/footer.html'); ?> </p>
</body>
</html>


