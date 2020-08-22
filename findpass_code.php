<?php
session_start();
//for hiding errors
error_reporting(E_PARSE | E_ERROR);


$email=$_POST['email'];
$username=$_POST['username'];

$con=mysqli_connect('localhost','root');
$select=mysqli_select_db($con,'project');
if($select!=1)
{
	echo"Error occures to login...".mysqli_connect_error();
}
else{
	$q="select * from user where email='$email' && username='$username'";
	$result=mysqli_query($con,$q);
	$num=mysqli_num_rows($result);
	
	//Retriving username 
	$row=mysqli_fetch_assoc($result);
	$username=$row['username'];
	$password=$row['password'];
	
	if($num==1)
	{
		$_SESSION['password']=$password;
		$_SESSION['username']=$username;
		header('location:http://localhost/project/forgot.php');
	}else{
		$_SESSION['message']="Wrong Username or Email entered";
		header('location:http://localhost/project/findpass.php');
	}
		
}
mysql_free_result();
mysqli_close();
?>