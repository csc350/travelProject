<?php
session_start();
//Instead of the code below, we will get it from the database
$username = $_GET['username'];
$password = $_GET['password'];

if(($_REQUEST ['username'] == 'christian') && ($_REQUEST ['password'] == 'gonzalez')){
		include ('userspage.php');
		
}

else
	include ('Signup.php');

?> 
