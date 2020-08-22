<?php
session_start();
//for hiding errors
error_reporting(E_PARSE | E_ERROR);

//show the college list where cutoff <=80% 
$marks=$_POST['marks'];
$subject=$_POST['subject'];

//Transfering to session variable
$_SESSION['marks']=$marks;
$_SESSION['subject']=$subject;

$con=mysqli_connect('localhost','root');
$select=mysqli_select_db($con,'project');

//Collecting college_id from college_subject table
$q="select college_id from college_subject where cutoff between 0 and '$marks' && subject='$subject'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
$i=1;

while($row=mysqli_fetch_assoc($result))
{
	$co=$row['college_id'];
	$c_id[$i]=$co;
	$i++;
}
if(!isset($c_id))
	header('location:http://localhost/project/error.php');
	

for($j=1;$j<=$num;$j++)
{	
//Displaying results
$q2="select * from college where college_id='$c_id[$j]'";
$result2=mysqli_query($con,$q2);

while($row=mysqli_fetch_assoc($result2))
	{	
		$n[$j]=$row['name'];
		$u[$j]=$row['university'];
		$a[$j]=$row['address'];
		$e[$j]=$row['email'];
		$w[$j]=$row['website'];
		$p[$j]=$row['phone'];	
	}
}	
	
mysqli_close();
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Search
	</title>
	<div style="min-width: 90px; margin: 0 auto;">

	<style type="text/css">
		body{
			background-image: url(images/back1.jpg);
			margin: 0px;
		}

		.page{
			margin:64px;
		}
		p{
			font-size: 35px;
			font-family: impact;
			color: #431318;
		}
		.but{
			padding: 50px;
		}
		.button{
			border: 2px solid orange;
			background-color: green;
			padding: 24px 500px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		  	text-align: center;
		  	color: black;
		  	font-size: 20px;
		}
		.button:hover{
			background-color: orange;
		}

		tr {
			background-color:green;
		}
		th {
			background-color:orange;
		}

		ul 
		{
			list-style-type: none;
		}
		.college
		{
			padding: 10px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}
		tr,th,td
		{
			padding: 10px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  			text-align: center;
		}
		.home{
			margin-left: 88%;
			margin-right: 1%;
			text-align: middle;
			color: #5d1431;
			padding: 5px;
			border: 3px dashed green;
		}
		.home:hover{
			background-color: green;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			font-family: comic sans;
			color: white;
		}
		.icon{
			padding: 24px;
			padding-bottom: 5px;
			padding-top: 10px;

		}
	</style>
	<link rel="stylesheet" style="text/css" href="css/search.css">
</head>

<body>

<!--Main html===============================================================================-->

	<div class="w3-bar w3-green w3-large w3-padding-small">
			
			<a href="http://localhost/project/index.php" class="w3-bar-item w3-button w3-hover-blue">Home</a>
			<a href="http://localhost/project/html/contact.html" class="w3-bar-item w3-button">Contact Us</a>
			<a href="http://localhost/project/html/help.html" class="w3-bar-item w3-button" >Help</a>
			<a href="http://localhost/project/html/report.html" class="w3-bar-item w3-button">Report</a>
			<a href="http://localhost/project/html/remarks.html" class="w3-bar-item w3-button">Remarks</a>
			
		</div>
	
	<div class="page">
		<p><u>Informations Of Matched Colleges : </u></p>

		

		<table class="college">
				<tr>
					<th>Name</th>
					<th>University</th>
					<th>Address</th>
					<th>Email</th>
					<th>Website</th>
					<th>Phone</th>
				</tr>
				<?php
				for($j=1;$j<=$num;$j++)
				{
				?>
				<tr>
					<td><?php echo $n[$j]; ?></td>
					<td><?php echo $u[$j]; ?></td>
					<td><?php echo $a[$j]; ?></td>
					<td><?php echo $e[$j]; ?></td>
					<td><?php echo $w[$j]; ?></td>
					<td><?php echo $p[$j]; ?></td>
				</tr>
				<?php
				}
				?>
					
				<br/>
				<br/>
		</table>
				<br/>
				<br/>
				
				<div class>
					<a href="http://localhost/project/selection.php">
						<button>Select</button>
					</a>
				</div>
	</div>

</body>
</html>