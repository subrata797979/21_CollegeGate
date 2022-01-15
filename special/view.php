<?php
session_start();
//for hiding errors
error_reporting(E_PARSE | E_ERROR);


$con=mysqli_connect('localhost','root');
$select=mysqli_select_db($con,'project');


//Collecting college_id from college_subject table
$q="select college_id from college ";
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
	header('location:.././error.php');
	

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
		View Colleges
	</title>
	<div style="min-width: 900px; margin: 0 auto;">

	<style type="text/css">
		body{
				background-image: url(.././images/ok.jpg);
				background-attachment: fixed;
				/*border: 4px solid red;*/
			}
			.last{
				padding: 300px 20px 200px 20px;
			}

			.table{
				background-color:#4c4c4c;
				padding: 30px;
				opacity: 0.7;
				width: 100%;
			}
			.table tr,th,td,ul,li
			{
				padding: 20px;
	  			text-align: center;
	  			list-style: none;
			}
			.table th{
				color:lightgreen;
				font-size:30px;
				font-weight: bold;
			}
			.last a{
				color:#cccccc;
				text-decoration: none;
			}
			.last li:hover, a:hover {
		    	background-color: green;
				color:black;
			}

			.copyright{
				color:#666666;
				font-family:aral;
				font-size:20px;
				padding:50px;
				padding-bottom:120px;
				text-align:center;
				line-height:20px;
				border-top:1px solid #666666;
				margin-top:50px;
			}
			.main{
				margin-top: 200px;
			}
			a{
				text-decoration: none;
			}
			.m{
				margin-top: 100px;
			}
	</style>

	<link rel="stylesheet" style="text/css" href="css/search.css">
	<link rel="stylesheet" type="text/css" href=".././css/w3.css">
</head>

<body>

<!--Main html===============================================================================-->

	<div class="w3-container w3-tale w3-xxxlarge w3-padding-16">
		View Colleges
	</div>
	<div class="w3-container w3-padding-small ">
		<div class="w3-bar w3-green w3-large">
			
			<a href=".././index.php" class="w3-bar-item w3-button w3-hover-blue">Home</a>
			<a href=".././html/contact.html" class="w3-bar-item w3-button">Contact Us</a>
			<a href=".././html/help.html" class="w3-bar-item w3-button" >Help</a>
			<a href=".././html/report.html" class="w3-bar-item w3-button">Report</a>
			<a href=".././html/remarks.html" class="w3-bar-item w3-button">Remarks</a>
			
		</div>
		<div class="w3-center w3-padding-64">
			<p><h2 class="w3-padding-16 w3-leftbar w3-border-blue w3-pale-blue">List of all colleges </h2></p>
		</div>
		<div class="w3-container" style="overflow-x:auto;">
			<table class="w3-table-all ">
				<tr class="w3-red">
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
			</table>
		</div>
	</div>

	<footer class="w3-container w3-tale">
			<div class="last">
				<table class="table w3-centered">
					<tr>
						<th>Menu</th>
						<th>Our Services</th>
						<th>Social</th>
					</tr>
					<tr>
						<td>
							<ul>
								<li><a href="#">Register</a></li>
								<li><a href="#">Login</a></li>
								<li><a href="#">About us</a></li>
								<li><a href="#">Contact us</a></li>
							</ul>
						</td>
						<td>
							<ul>
								<li><a href="#">Carrier Guide</a></li>
								<li><a href="#">Life Decisions</a></li>
								<li><a href="#">Fitness Guide</a></li>
								<li><a href="#">Educational Guide</a></li>
							</ul>
						</td>
						<td>
							<ul>
								<li><a href="#">Facebook</a></li>
								<li><a href="#">Whats app</a></li>
								<li><a href="#">Twitter</a></li>
								<li><a href="#">Linkin</a></li>
							</ul>
						</td>
					</tr>
				</table>
			</div>
		
			<div class="copyright">
				<p>@2018 Better future for Students. All Rights Reserved. <p><span>Designed with by Subrata, Kunal, Ankita   Website Images by Us and Google</span></p></p>	
			</div>
		</footer>

</body>
</html>










