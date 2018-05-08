<html>
<head>
	<title>resetPassword.html</title>
	<link rel="stylesheet" href="./css/header_style.css">
	<link rel="stylesheet" href="./css/footer_style.css">
</head>
<body style="text-align:center;">

<p><?php include ('./include/header.html'); ?></p>

<h2>Reset your Password</h2>
Please enter the email address associated with your account here.<br/>
We will send you a link to reset your password.

<form action="resetPassword.php" method="post">

<p>Email Address: <input type="text" name="email" size=50 maxlength="100"/></p>

<p align="center"> <input type="submit" name="submit" value="Send Email"/><span class="errorMessage" id="emailError"><br/>Invalid email address!</span></p>

<?php
if (isset($_GET['email'])) {

	// Need a valid email:
	if (filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)) {
		
		// Must match specific values:
		//if ( ($_GET['email'] == 'email') ) {//real line to be used instead of line below
		if ( ($_REQUEST['email'] == 'christiangonzalez@gmail.com') ) {

			// Indicate success:
			echo 'We have sent an email to your email address.';
			
		} else { // Mismatch!
			echo 'Invalid email address.  No user registered!';
		}
		
	} else { // Invalid email address!
		echo 'Please enter your email address.';
	}

} else { // Placeholder - looks neater with extra line space
	echo ' ';
}
?> 

<a href="login.php">Return to Login Page</a>

<p><?php include ('./include/footer.html'); ?></p>
</body>
</html>
