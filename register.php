<?php

	include 'includes/session.php';
	$conn = mysqli_connect('localhost', 'root', '', 'ecomm');
	if(isset($_POST['signup'])){
		
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$creditno=$_POST['creditno'];
		$password = password_hash($password, PASSWORD_DEFAULT);
		$sql = "INSERT INTO `users`(`email`, `password`,`firstname`, `lastname`, `status`,creditno) VALUES ('$email', '$password', '$firstname', '$lastname', '1','$creditno')";

		$qry = mysqli_query($conn, $sql);
		if($qry){
			$_SESSION['error'] = 'Login Now';
			header("Location: login.php");
		}else{
			$_SESSION['error'] = 'Try Again';
			header("Location: signup.php");
		}
	}

?>