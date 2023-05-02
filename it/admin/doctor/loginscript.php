<?php 

if(isset($_POST['submit'])){

    $admin=$_POST["name"];
    $Password=$_POST["docpass"];


    require_once 'connect.php';
    
    $sql = "SELECT * FROM admin WHERE Email='$admin' AND Password='$Password'";
	$result = mysqli_query($conn, $sql);
	


	// If the username and password match, store the doctor's ID in the session and redirect to the doctor's page
	if (mysqli_num_rows($result) == 1) {
		session_start();
		header("Location: ../patient-profile.php");
		exit();
	} else {
		// If the username and password do not match, display an error message
		$error = "Invalid username or password.";
	}
}


?>

