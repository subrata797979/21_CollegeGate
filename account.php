<?php
session_start();
//for hiding errors
error_reporting(E_PARSE | E_ERROR);


$email=$_SESSION['email'];
$username=$_SESSION['username'];

$con=mysqli_connect('localhost','root');
$select=mysqli_select_db($con,'project');

//retriving c_id from user
$q1="select college_id from user where email='$email'";
$result1=mysqli_query($con,$q1);
$row1=mysqli_fetch_assoc($result1);
$c_id=$row1['college_id'];

if(!isset($c_id)){
	//header('location: ./account.php');
	$_SESSION['mess']="<div><p>NOTHING TO DISPLAY. SAVE A COLLEGE FIRST.</p></div>";
}

//dislpaying the college details
$q2="select * from college where college_id='$c_id'";
$result2=mysqli_query($con,$q2);

mysqli_close();
?>


<!DOCTYPE html>
<html>
<head>
	<title>
		Account
	</title>
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


		footer{
			width: auto;
			color:white;
			background-color:black;
			margin-top: 30px;
			padding:50px;
			text-align:center;
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
			margin-left: 45%;
			margin-right: 44%;
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
		.but{
			margin-left: 40%; 
		}
		.logout{
			margin-left: 90%;
			margin-right: 4%;
			text-align: middle;
			color: #5d1431;
			padding: 4px;
		}
		.logout:hover{
			background-color: #c72816;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			border-radius: 15px;
			font-family: comic sans;
			font-weight: 600px;
			color: white;
		}

	</style>
</head>
<body>
	<div class="w3-bar w3-green w3-large w3-padding-small">
			
		<a href="./index.php" class="w3-bar-item w3-button w3-hover-blue">Home</a>
		<a href="./html/contact.html" class="w3-bar-item w3-button">Contact Us</a>
		<a href="./html/help.html" class="w3-bar-item w3-button" >Help</a>
		<a href="./html/report.html" class="w3-bar-item w3-button">Report</a>
		<a href="./html/remarks.html" class="w3-bar-item w3-button">Remarks</a>
			
	</div>
	<div class="page">
		
		<p><u><?php echo $username?>'s Saved College : </u></p>
		<div >
			<div>
				<a href="./end.php"><img src="images/logout.png"></a>
			</div>
			<div>
				Sign Out
			</div>
		</div>

		<table class="college">
			
			<?php 
				$mess=$_SESSION['mess'];
				if(isset($mess)){
					echo $mess;
					unset($_SESSION['mess']);
				}
				else{
					echo"<tr>
							<th>Name</th>
							<th>University</th>
							<th>Address</th>
							<th>Email</th>
							<th>Website</th>
							<th>Phone</th>
						</tr>";
				}
			?>
				
			
			<?php
			while($row=mysqli_fetch_assoc($result2))
			{	
				$n=$row['name'];
				$u=$row['university'];
				$a=$row['address'];
				$e=$row['email'];
				$w=$row['website'];
				$p=$row['phone'];
			?>

				
			<tr>
				<td><?php echo $n; ?></td>
				<td><?php echo $u; ?></td>
				<td><?php echo $a; ?></td>
				<td><?php echo $e; ?></td>
				<td><?php echo $w; ?></td>
				<td><?php echo $p; ?></td>
			</tr>
				
			<br/>
			<br/>
			
			<?php
			}
			?>
		</table>
		<br/>
		<br/>
		<p>A great future ahead. Wish you all the very best.</p>

		<br>
		<br>
		<br>
		<br>
		


		<!-- to delete account -->
		<div >
			<div >
				<a href="./delete_account.php"><img src="images/home.png"></a>
			</div>
			<div>
				Delete account
			</div>
		</div>
	</div>


		
</body>
</html>