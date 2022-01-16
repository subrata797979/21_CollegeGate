<?php
include './configDb.php';
session_start();
//for hiding errors
error_reporting(E_PARSE | E_ERROR);

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$password2=$_POST['password2'];

if($password2!=$password)
{
	$status=2;
}
else{
	// $con=mysqli_connect('localhost','root');
	// $select=mysqli_select_db($con,'project');
	
	$sql="INSERT INTO user (username,email,password) VALUES('$username','$email','$password')";
	$status=mysqli_query($con,$sql);
	
	mysqli_close($con);
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>
		Registration
	</title>
		<h2>Registration Form</h2>
	<link rel="stylesheet" href="css/thank.css">
	<div style="min-width: 900px; margin: 0 auto;">
</head>
<body>
	<div class="thank">
		<img src="images/thank.jpeg">
	</div>
	<div class="write">
		<P>Thank you very much for joining to our college gate family.</p>
		<p><?php 
		if($status==1)
			header('location:./html/reg_thanks.html');
		elseif($status==2)
		{
			$_SESSION['msgr']="Mismached password, Try again";
			header('location:./registration.php');
		}
		else
			header('location:./html/error.html');
		?></p>
	</div>
</body>
</html>