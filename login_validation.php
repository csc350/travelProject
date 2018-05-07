<?php
session_start();
//Instead of the code below, we will get it from the database
$username = $_GET['username'];
$password = $_GET['password'];

if(($_Session [$username] == 'christian') AND ($_Session [$password] == 'gonzalez')){
		include ('userspage.php');
		
}

else
	include ('Signup.php');

?> 