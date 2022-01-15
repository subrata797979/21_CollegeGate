<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Forgot password</title>

	<!-- Google Fonts -->
	<link rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="css/reglog.css">

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

	<div class="container">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo">College Gate</span></h1>
		</div>
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Forgot password</h2>
			</div>
			<form method="POST" action="./findpass_code.php">
			<label for="username">Username</label>
			<br/>
			<input type="username" name="username" required>
			<br/>
			<label for="email">Email</label>
			<br/>
			<input type="email" name="email" required>
			<br/>
			<button type="submit" value="login">Find</button>
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