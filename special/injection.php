<?php
session_start();
//$email=$_SESSION['email'];

//for hiding errors
error_reporting(E_PARSE | E_ERROR);

mysqli_close($con);
?>

<!DOCTYPE html>
<head>
	<title>Injection</title>
</head>
<body>
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
	</style>

	<link rel="stylesheet" type="text/css" href=".././css/w3.css">

	<div class="w3-container w3-tale w3-xxxlarge w3-padding-16">
		Injection
	</div>
	<div class="w3-container">		

		<div class="w3-bar w3-green w3-large">
			
			<a href=".././index.php" class="w3-bar-item w3-button w3-hover-blue">Home</a>
			<a href=".././html/contact.html" class="w3-bar-item w3-button">Contact Us</a>
			<a href=".././html/help.html" class="w3-bar-item w3-button" >Help</a>
			<a href=".././html/report.html" class="w3-bar-item w3-button">Report</a>
			<a href=".././html/remarks.html" class="w3-bar-item w3-button">Remarks</a>
			
		</div>
		
		
		<div class="w3-center w3-padding-64">
			<div class="w3-card-4">
				<div class="w3-container w3-blue w3-center w3-xlarge">
					<p>Hi, Administrator...</p>
				</div>
				<img src=".././images/hello.jpg" class="w3-round w3-image w3-greyscale-min w3-hover-greyscale" width="auto" alt="our group pic">
			</div>
			<p><h2 class="w3-padding-16 w3-leftbar w3-border-blue w3-pale-blue">What you want to do?</h2></p>
			
			<div class="w3-container w3-padding-large">
				<div class="w3-button w3-blue">
					<a href=".././special/view.php"><p>View Colleges</p></a>
				</div>
				<div class="w3-button w3-green">
					<a href=".././special/add.php"><p>Add College</p></a>
				</div>
				<div class="w3-button w3-red">
					<a href=".././special/delete.php"><p>Delete College</p></a>
				</div>
			</div>

			<div class=" main w3-padding-large w3-large w3-leftbar w3-rightbar w3-border-white w3-red w3-center w3-round">
				<p class="w3-hover-greyscale">
					Note: Changing anything will affect the whole database. So, be careful about that. 
				</p>
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
















