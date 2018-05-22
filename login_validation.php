
<?php
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
	}
  if($_SERVER['REQUEST_METHOD']=='POST'){
	 if(isset($_POST['user_name']) &&  !empty($_POST['user_name']) && isset($_POST['password'])   && !empty($_POST['password'])){
	   
		//Connect to the database 
		require('C:/xampp/mysqli_connect.php'); 	   
	   
	    $user_name  = mysqli_real_escape_string($dbc, $_POST['user_name']);
		$password   = md5(mysqli_real_escape_string($dbc, $_POST['password']));
		
		
		//Get the query from the database with the entered user_name
	    //Check if the user_name is already in the database 
		$query = "SELECT *FROM users where user_name = ? AND password = ? "; 
	    $stmt = mysqli_stmt_init($dbc);
	   
	   if (!mysqli_stmt_prepare($stmt, $query)){
		   echo "SQL statement failed."; 
	   }
	   else{
		   //Bind the parameters 
		   mysqli_stmt_bind_param($stmt, 'ss', $user_name, $password );
		   mysqli_stmt_execute($stmt); 
		   $result = mysqli_stmt_get_result($stmt); 

		   //echo mysqli_num_rows($result); 
		   
		   //User name has been used
		   if (mysqli_num_rows($result)  != 1){
			   echo "The combination of the user name and the password is not correct."; 
		   }else{
                //Start the session
				$row = mysqli_fetch_assoc($result);
				$_SESSION['user_name'] = $user_name; 
				$_SESSION['user_id'] = $row['user_id']; 
				header ("refresh:0; url=index.php");
			    exit(); 
		   }   
	    }
	   //Close the query
	   mysqli_close($dbc);
    }else{
		echo "Please enter your user name and password."; 
    }
 }
?>  	
