<?php
    $con=new mysqli('localhost','root','','book_db');

    if($con){
        // echo "connection successfull";
    }else{
        die(mysqli_error($con));
    }



//     // User login
// if (isset($_POST['login_user'])) {
	
// 	// Data sanitization to prevent SQL injection
// 	$name = mysqli_real_escape_string($db, $_POST['name']);
// 	$email = mysqli_real_escape_string($db, $_POST['email']);
//     $phone = mysqli_real_escape_string($db, $_POST['phone']);
//     $address = mysqli_real_escape_string($db, $_POST['address']);
//     $guests = mysqli_real_escape_string($db, $_POST['guests']);
//     $arrivals = mysqli_real_escape_string($db, $_POST['arrivals']);
//     $leaving = mysqli_real_escape_string($db, $_POST['leaveing']);
//     $bday = mysqli_real_escape_string($db, $_POST['bday']);
//     $gender = mysqli_real_escape_string($db, $_POST['gender']);
//     $rail = mysqli_real_escape_string($db, $_POST['rail']);

// 	// Error message if the input field is left blank
// 	if (empty($username)) {
// 		array_push($errors, "Username is required");
// 	}
// 	if (empty($password)) {
// 		array_push($errors, "Password is required");
// 	}

// 	// Checking for the errors
// 	if (count($errors) == 0) {
		
// 		// Password matching
// 		$password = md5($password);
		
// 		$query = "SELECT * FROM user WHERE username=
// 				'$username' AND password='$password'";
// 		$results = mysqli_query($db, $query);

// 		// $results = 1 means that one user with the
// 		// entered username exists
// 		if (mysqli_num_rows($results) == 1) {
			
// 			// Storing username in session variable
// 			$_SESSION['username'] = $username;
			
// 			// Welcome message
// 			$_SESSION['success'] = "You have logged in!";
			
// 			// Page on which the user is sent
// 			// to after logging in
// 			header('location: index.php');
// 		}
// 		else {
			
// 			// If the username and password doesn't match
// 			array_push($errors, "Username or password incorrect"); 
// 		}
// 	}
// }

?>



