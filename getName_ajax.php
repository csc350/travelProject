<?php # Script 15.9 - login_ajax.php
// This script is called via Ajax from login.php.
// The script expects to receive two values in the URL: an email address and a password.
// The script returns a string indicating the results.

// Need two pieces of information:

//if (isset($_GET['userID'])) {

	// Need a valid email addreess:
	if (filter_var($_GET['userID'], FILTER_VALIDATE_INT)) {
		$userID=$_GET['userID'];
	    $conn = mysqli_connect('localhost', 'yukawa', 'kawyua', 'csc350');
		$query="SELECT first_Name, last_Name FROM users WHERE user_id = '$userID'";
		$r = mysqli_query($conn, $query);
		if (mysqli_num_rows($r) ==1)
		{	
			$row = mysqli_fetch_array($r, MYSQLI_NUM);
		//echo json_encode(
		//array(
		//		"firstName" => $row[0],
		//		"lastName" => $row[1]
		//	 )
		//	);
		//echo 'happy';
		//$myobj->firstName = "Don";
		//$myobj->lastName = "Wei";
		//$myJSON = json_encode($myobj);
		//echo $myJSON;
			echo json_encode(
			array(
					"firstName" => $row[0],
					"lastName" => $row[1]
				 )
				);
			// Indicate success:
			//echo 'CORRECT';			
		//} else { // Mismatch!
		//	echo 'INCORRECT';
		//}		
	} else { // Invalid email address!
		echo json_encode(array());
	}
}
//} //else { // Missing one of the two variables!
  //echo 'INCOMPLETE';
//}

?>