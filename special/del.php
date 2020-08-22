<?php
session_start();
//$email=$_SESSION['email'];

//for hiding errors
error_reporting(E_PARSE | E_ERROR);

$c_id=$_POST['done'];
echo $c_id;

$con=mysqli_connect('localhost','root');
$select=mysqli_select_db($con,'project');

$q="delete from college where college_id = '$c_id'";
$res=mysqli_query($con,$q);

$q2="delete from college_subject where college_id = '$c_id'";
$res2=mysqli_query($con,$q2);

$_SESSION['ms']="<p>Selected entry deleted successfully</p>";
header('location:http://localhost/project/special/delete_thanks.html');
mysqli_close();
?>

