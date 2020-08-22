<?php
session_start();
//for hiding errors
error_reporting(E_PARSE | E_ERROR);

//show the college list where cutoff <=80% 
$name=$_POST['name'];
$university=$_POST['university'];
$address=$_POST['address'];
$email=$_POST['email'];
$website=$_POST['website'];
$ph=$_POST['ph'];

echo $ph;
echo $name;


$con=mysqli_connect('localhost','root');
$select=mysqli_select_db($con,'project');

if($select!=1)
{
	header('location:http://localhost/project/error.php');
}else{
	$q="INSERT INTO college (name, university, address, email, website, phone) VALUES('$name','$university','$address','$email','$website','$ph')";
	mysqli_query($con,$q);
}

//Retriving $college_id

$q2="select  college_id from college where name = '$name' ";
$result2=mysqli_query($con,$q2);

$row=mysqli_fetch_assoc($result2);	
$college_id=$row['college_id'];
$_SESSION['college']=$college_id;

?>

<!DOCTYPE html>
<head>
	<title>Subject Marks</title>
	<!-- Google Fonts -->
	<link rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="http://localhost/project/css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="http://localhost/project/css/reglog.css">
</head>
<body>
	<style type="text/css">

			body{
				background-image: url(http://localhost/project/images/ok.jpg);
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
	</style>

	<link rel="stylesheet" type="text/css" href="http://localhost/project/css/w3.css">

	<div class="w3-container w3-tale w3-xxxlarge w3-padding-16">
		Subject Marks
	</div>
	<div class="w3-container">		

		<div class="w3-bar w3-green w3-large">
			
			<a href="http://localhost/project/index.php" class="w3-bar-item w3-button w3-hover-blue">Home</a>
			<a href="http://localhost/project/html/contact.html" class="w3-bar-item w3-button">Contact Us</a>
			<a href="http://localhost/project/html/help.html" class="w3-bar-item w3-button" >Help</a>
			<a href="http://localhost/project/html/report.html" class="w3-bar-item w3-button">Report</a>
			<a href="http://localhost/project/html/remarks.html" class="w3-bar-item w3-button">Remarks</a>
			
		</div>

		<div class="container" style="margin-top: 0px;">
			<div class="top">
				<h1 id="title" class="hidden"><span id="logo"><?php echo $name;?></span></h1>
			</div>
			<div class="login-box animated fadeInUp">
				<div class="box-header">
					<h2>Subject Cutoff Marks</h2>
				</div>
				<form method="POST" action="http://localhost/project/special/subject_code.php">
				<br/>
				<label for="a">Science Group</label>
				<br/>
				<input type="text" name="a" required>
				<br/>
				<label for="b">Commerce Group </label>
				<br/>
				<input type="text" name="b" required>
				<br/>
				<label for="c">Arts Group</label>
				<br/>
				<input type="text" name="c" required>
				<br/>
			
				<button type="submit" value="add">Add Marks</button>
				</form>
			</div>
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




