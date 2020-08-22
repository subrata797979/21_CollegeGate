
<!DOCTYPE html>
<head>
	<title>Add College</title>
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
		Add College
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
				<h1 id="title" class="hidden"><span id="logo">College Gate</span></h1>
			</div>
			<div class="login-box animated fadeInUp">
				<div class="box-header">
					<h2>Enter details</h2>
				</div>
				<form method="POST" action="http://localhost/project/special/subject.php">
					<br/>
					<label for="name">Name</label>
					<br/>
					<input type="text" name="name" required>
					<br/>
					<label for="university">University</label>
					<br/>
					<input type="text" name="university" required>
					<br/>
					<label for="address">Address</label>
					<br/>
					<input type="text" name="address" required>
					<br/>
					<label for="email">Email</label>
					<br/>
					<input type="email" name="email" required>
					<br/>
					<label for="website">Website</label>
					<br/>
					<input type="text" name="website" required>
					<br/>
					<label for="ph">Phone</label>
					<br/>
					<input type="text" name="ph" required>
					<br/>
					<button type="submit" value="add">Add College</button>
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
















