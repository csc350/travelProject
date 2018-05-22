<?php
  if($_SERVER['REQUEST_METHOD']=='POST'){
	 if(isset($_POST['user_name']) &&  !empty($_POST['user_name']) && isset($_POST['first_name']) && !empty($_POST['first_name']) && 
	    isset($_POST['last_name']) &&  !empty($_POST['last_name']) && isset($_POST['password'])   && !empty($_POST['password']) &&
		isset($_POST['email'])     &&  !empty($_POST['email'])     && isset($_POST['phone'])      && !empty($_POST['phone']) &&
		isset($_POST['DateofBirth'])  &&  !empty($_POST['DateofBirth'] )){
	   
	    //Connect to the database 
	    require('C:/xampp/mysqli_connect.php'); 	   
	   
	   
	    $user_name  = mysqli_real_escape_string($dbc, $_POST['user_name']);
	    $first_name = mysqli_real_escape_string($dbc, $_POST['first_name']);
		$last_name  = mysqli_real_escape_string($dbc, $_POST['last_name']);
		$password   = md5(mysqli_real_escape_string($dbc, $_POST['password']));
		$email      = mysqli_real_escape_string($dbc, $_POST['email']);
		$phone      = mysqli_real_escape_string($dbc, $_POST['phone']);
	    $birthday   = date('Y-m-d',strtotime(mysqli_real_escape_string($dbc, $_POST['DateofBirth'])));
		$current_date = date("Y-m-d H:i:s");
		
		//Get the query from the database with the entered user_name
	    //Check if the user_name is already in the database 
		$query = "SELECT * FROM users WHERE user_name = ?";
	    $stmt = mysqli_stmt_init($dbc);
	   
	   if (!mysqli_stmt_prepare($stmt, $query)){
		   echo "SQL statement failed 1."; 
	   }
	   else{
		   //Bind the parameters 
		   mysqli_stmt_bind_param($stmt, 's', $_POST['user_name']);
		   mysqli_stmt_execute($stmt); 
		   $result = mysqli_stmt_get_result($stmt); 
		   
		   //User name has been used
		   if (mysqli_num_rows($result) != 0){
			   echo "The user name has been used."; 
				echo '<li><a href='."sign_up.php".'>Return to Sign up Page</a></li>';
			   echo '<li><a href='."login.php".'>Return to Login Page</a></li>';
		   }else{
			   $query2 = "SELECT * FROM users WHERE email = ?";
			   $stmt2 = mysqli_stmt_init($dbc); 
			   
			   if (!mysqli_stmt_prepare($stmt2, $query2)){
		           echo "SQL statement failed 2."; 
	           }
	           else{
					//Bind the parameters 
					mysqli_stmt_bind_param($stmt2, 's', $_POST['email']);
		            mysqli_stmt_execute($stmt2); 
					$result2 = mysqli_stmt_get_result($stmt2); 
			   
					 //Email has been used
					 if (mysqli_num_rows($result) != 0){
						echo "The email has been used.";   
						echo '<li><a href='."sign_up.php".'>Return to Sign up Page</a></li>';
						echo '<li><a href='."login.php".'>Return to Login Page</a></li>';
					 }else{
						 
						$query3 = "INSERT INTO users (first_name, last_name, user_name, email, password, date_birth, registration_time, phone_number) VALUES (?,?,?,?,?,?,?,?)";
						$stmt3 = mysqli_stmt_init($dbc);
						
						if (!mysqli_stmt_prepare($stmt3, $query3)){
							echo "SQL statement failed 3."; 
						}else{
							mysqli_stmt_bind_param($stmt3,"ssssssss", $first_name, $last_name, $user_name, $email, $password, $birthday, $current_date, $phone);
							mysqli_stmt_execute($stmt3); 
							
							echo "You have successfully registered!"; 
							echo '<li><a href='."login.php".'>Return to Login Page</a></li>';
						}
					}						
			   }
		   }
		   
	    }
	   //Close the query
	   mysqli_close($dbc);	
		
		
	   /*
	   $stmt3 = mysqli_prepare($dbc, $query3); 
		mysqli_stmt_bind_param($stmt3,"ssssiii", $first_name, $last_name,$user_name, $email, $password,$birthday,$phone);
						
						mysqli_stmt_execute($stmt3); 
	   //mysqli_stmt_bind_param($stmt, 's', $_POST['user_name']);
	   //mysqli_stmt_execute($stmt);
	   //$user_name  = $_POST['user_name'];
	   //$query_check = "SELECT * FROM users WHERE user_name = '$user_name'"; 
	   //$response_check = mysqli_query($dbc, $query_check); 
	   
	   //If the book does not exist, insert it
       //if($response_check  && mysqli_num_rows($response_check) == 0 ){
	   if ($stmt && mysqli_num_rows($stmt) == 0){
			$query2 = "SELECT * FROM users WHERE email = ?";
	        $stmt2 = mysqli_prepare($dbc, $query); 
			mysqli_stmt_bind_param($stmt2, 's', $_POST['email']);
			mysqli_stmt_execute($stmt2);
	         //$email      = $_POST['email'];
			 //$query_check2 = "SELECT * FROM users WHERE email = '$email'"; 
	         //$response_check2 = mysqli_query($dbc, $query_check2); 
			 
			 //if($response_check  && mysqli_num_rows($response_check) == 0 ){ 
			if ($stmt2 && mysqli_num_rows($stmt2) == 0){
				$user_name  = $_POST['user_name'];
				$first_name = $_POST['first_name'];
				$last_name  = $_POST['last_name'];
				$password   = $_POST['password'];
				$email      = $_POST['email'];
				$phone      = $_POST['phone'];
				$birthday   = $_POST['birthday'];
		   
				$query3 = "INSERT INTO users (first_name,last_name, user_name, email, password, birthday, phone) VALUES (?,?,?,?,?,?,?)";
				$stmt3 = mysqli_prepare($dbc, $query3); 
				mysqli_stmt_bind_param($stmt3,"ssssiii", $first_name, $last_name,$user_name, $email, $password,$birthday,$phone);
				$user_name  = $_POST['user_name'];
				$first_name = $_POST['first_name'];
				$last_name  = $_POST['last_name'];
				$password   = $_POST['password'];
				$email      = $_POST['email'];
				$phone      = $_POST['phone'];
				$birthday   = $_POST['birthday'];
				mysqli_stmt_execute($stmt3);
				
		        
				if ($stmt3){
					echo "You have successfully registered."; 
				}
				else{
					echo "Error!"; 
				} 
				//$stmt3.close(); 
			}
			else{
				echo "The email has been used.";    
			}
			//$stmt2.close(); 
	    }
	    else{
		   echo "The user name has been used.";  
		}
		//$stmt.close(); 
		*/
		   
    }else{
		echo "Please fill the required information to sign up!"; 
	}
 }
?>  	
