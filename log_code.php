<?php
session_start();
//for hiding errors
error_reporting(E_PARSE | E_ERROR);


$email=$_POST['email'];
$password=$_POST['password'];


$con=mysqli_connect('localhost','root');
$select=mysqli_select_db($con,'project');
if($select!=1)
{
	echo"Error occures to login...".mysqli_connect_error();
}
else{
	$q="select * from user where email='$email' && password='$password'";
	$result=mysqli_query($con,$q);
	$num=mysqli_num_rows($result);
	
	//Retriving username 
	$row=mysqli_fetch_assoc($result);
	$user=$row['username'];
	
	if($num==1)
	{
		$_SESSION['email']=$email;
		$_SESSION['username']=$user;
		header('location:./session.php');
	}else{
		if($email=="root@root.com" && $password=="1")
		{
			header('location:./special/injection.php');
		}else{
			$_SESSION['message']="Wrong Email or Password";
			header('location:./login.php');
		}
	}
		
}
mysql_free_result();
mysqli_close();
?>


