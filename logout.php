<?php
// Initialize the session.
// If you are using session_name("something"), don't forget it now!
session_start();

// Unset all of the session variables.
$_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finally, destroy the session.
session_destroy();
?>
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
		<p>Successfully Logged Out</p>
	<div>
	   <p>Not A Member? Sign up Now! <a href="sign_up.php">Sign Up </a> </p>
	</div>
   </div>
   <!--include the footer--> 
	<p><?php include ('./include/footer.html'); ?> </p>
  </body>
</html>