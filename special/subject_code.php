<?php
session_start();
//$email=$_SESSION['email'];

//for hiding errors
error_reporting(E_PARSE | E_ERROR);

$college_id=$_SESSION['college'];

$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];

$con=mysqli_connect('localhost','root');
$select=mysqli_select_db($con,'project');

$q="INSERT into college_subject (college_id, subject, cutoff) VALUES('$college_id','a','$a')";
$res=mysqli_query($con,$q);

$q2="INSERT into college_subject (college_id, subject, cutoff) VALUES('$college_id','b','$b')";
$res2=mysqli_query($con,$q2);

$q3="INSERT into college_subject (college_id, subject, cutoff) VALUES('$college_id','c','$c')";
$res3=mysqli_query($con,$q3);


$_SESSION['ms']="<p>Selected entry deleted successfully</p>";
header('location:http://localhost/project/special/delete_thanks.html');
mysqli_close();
?>

