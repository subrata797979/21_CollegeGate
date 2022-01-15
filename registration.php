<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Registration</title>

	<link rel="stylesheet" href="./css/animate.css">
	<link rel="stylesheet" href="./css/reglog.css">
	<link rel="stylesheet" href="./css/w3.css">
	<link rel="stylesheet" href="./css/last.css">

</head>

<body>
	
	<div class="w3-bar w3-green w3-large" style="opacity: 0.8;">
			
		<a href="./index.php" class="w3-bar-item w3-button w3-hover-blue">Home</a>
		<a href="./html/contact.html" class="w3-bar-item w3-button">Contact Us</a>
		<a href="./html/help.html" class="w3-bar-item w3-button" >Help</a>
		<a href="./html/report.html" class="w3-bar-item w3-button">Report</a>
		<a href="./html/remarks.html" class="w3-bar-item w3-button">Remarks</a>
			
	</div>

	<div class="container" style="margin-top: 0px;">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo">College Gate</span></h1>
		</div>
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Registration</h2>
			</div>
			<form method="POST" action="./reg_code.php">
			<label for="username">Username</label>
			<br/>
			<input type="text" name="username" required>
			<br/>
			<label for="email">Email</label>
			<br/>
			<input type="email" name="email" required>
			<br/>
			<label for="password">Password</label>
			<br/>
			<input type="password" name="password" required>
			<br/>
			<label for="password">Confirm Password</label>
			<br/>
			<input type="password" name="password2" required>
			<br/>
			<button type="submit" value="Register">Sign Up</button>
			<br/>
			<br/>
			<!-- php code -->
			<?php
			 //warning for wrong password or username
				session_start();
				//for hiding errors
				error_reporting(E_PARSE | E_ERROR);
				$msg=$_SESSION['msgr'];
				if (isset($msg))
				{
					echo $msg;
					unset($_SESSION['msgr']);
				}
			?>
			</form>
			<br/>
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