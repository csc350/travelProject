<?php # Script 15.9 - login_ajax.php
// This script is called via Ajax from login.php.
// The script expects to receive two values in the URL: an email address and a password.
// The script returns a string indicating the results.

session_start();
if(isset($_SESSION['user_id']) && isset( $_SESSION['user_name'])){
	echo 'This is working';
	echo json_encode(
	array(
		"user_id" => $_SESSION['user_id'],
		"user_name" => $_SESSION['user_name']
	 )
	);
		// Indicate success:
		//echo 'CORRECT';			
	//} else { // Mismatch!
	//	echo 'INCORRECT';
	//}		
} 
else { // Invalid email address!
	echo json_encode(array());
}
//} //else { // Missing one of the two variables!
  //echo 'INCOMPLETE';
//}

?>