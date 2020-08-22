<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Login page</title>

	<link rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="http://localhost/project/css/animate.css">
	
	<link rel="stylesheet" href="http://localhost/project/css/reglog.css">

	<link rel="stylesheet" href="http://localhost/project/css/w3.css">

</head>

<body>

	<style type="text/css">
		
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
			.q{
				border-bottom: 3px solid black;
				border-top: 3px solid black;
				margin: 0px;
			}
	</style>

	<div class="w3-bar w3-green w3-large" style="opacity: 0.8;">
			
		<a href="http://localhost/project/index.php" class="w3-bar-item w3-button w3-hover-blue">Home</a>
		<a href="http://localhost/project/html/contact.html" class="w3-bar-item w3-button">Contact Us</a>
		<a href="http://localhost/project/html/help.html" class="w3-bar-item w3-button" >Help</a>
		<a href="http://localhost/project/html/report.html" class="w3-bar-item w3-button">Report</a>
		<a href="http://localhost/project/html/remarks.html" class="w3-bar-item w3-button">Remarks</a>
			
	</div>
	<div class="container" style="margin-top: 0px;">
		
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo">College Gate</span></h1>
		</div>
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Log In</h2>
			</div>
			<form method="POST" action="http://localhost/project/log_code.php">
			<label for="email">Email</label>
			<br/>
			<input type="email" name="email" required>
			<br/>
			<label for="password">Password</label>
			<br/>
			<input type="password" name="password" required>
			<br/>
			<button type="submit" value="login">Sign In</button>
			</form>
			<br/>
			<p>
				<?php //warning for wrong password or username
					session_start();
					//for hiding errors
					error_reporting(E_PARSE | E_ERROR);
					$msg=$_SESSION['message'];
					if (isset($msg))
					{
						echo $msg;
						unset($_SESSION['message']);
					}
				?>
			</p>
			<br/>
			<a href="http://localhost/project/findpass.php"><p class="small">Forgot your password?</p></a>
		</div>
	</div>

	<footer>
			<div class="last">
				<table class="table">
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
			<div style="padding: 0 50px;">
				<div class="copyright">
					<p>@2018 Better future for Students. All Rights Reserved. <p><span>Designed with by Subrata, Kunal, Ankita   Website Images by Us and Google</span></p></p>	
				</div>
			</div>
		</footer>
</body>

</html>