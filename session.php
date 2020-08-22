<?php
session_start();
//for hiding errors
error_reporting(E_PARSE | E_ERROR);
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Selection
	</title>
	<style type="text/css">
		body {
			background-image:url(images/ok.jpg);
			background-attachment: fixed;
			background-position: cover;
			background-repeat: no-repeat;
		}
		.page{
			margin:100px;
			margin-top: 30px;
			padding: 50px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		  	text-align: center;
		  	opacity: 0.7;
		  	background-color: #323232;
		}
		.item {
			text-align:center;
			padding:10px;
			margin:1px;
		}
		.heading{
			color:orange;
			font-size:26px;
		}
		.button{
			background-color: green;
			color:white;
			padding:5px;
			border:solid orange;
			padding: 20px;
			font-size: 20px;
			transition-duration: 0.4s;
		}
		.button1:hover {
    		background-color: orange;
    		color: white;
    		cursor: pointer;
		}
		.item ul {
			list-style-type:none;
			padding-right:30px;
		}
		.item li{
			padding:7px;
			font-size:25px;
			color:white;
		}
		select, input {
  			border-radius: 4px;
	    	padding: 3px;
		}
		.profile{
			margin:0px;
			text-align:right;
			font-size: 20px;
			vertical-align: middle;
		}
		.profile img{
			width: 100px;
			height: 100px;
		}




		/*===================================*/

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
			.last li:hover {
		    	background-color: green;	
			}
			.last a:hover{
				color:black;
			}

			.copyright{
				color:#666666;
				font-family:aral;
				font-size:20px;
				padding:40px;
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

			.t1{
				float: right;
			}
			.t2{
				float: left;
			}
			.t1,.t2{
				width: 50%;
				background-color: white;
				margin-top: -500px;
				padding: 30px;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
				border: 8px solid green;
				border-radius: 3px 3px;
				font-size: 40px;
				font-weight: 800;
				font-family: arial;
				opacity: 0.7;
			}

	</style>
</head>
<body>
	<div class="w3-bar w3-green w3-large w3-padding-small">
			
		<a href="http://localhost/project/index.php" class="w3-bar-item w3-button w3-hover-blue">Home</a>
		<a href="http://localhost/project/html/contact.html" class="w3-bar-item w3-button">Contact Us</a>
		<a href="http://localhost/project/html/help.html" class="w3-bar-item w3-button" >Help</a>
		<a href="http://localhost/project/html/report.html" class="w3-bar-item w3-button">Report</a>
		<a href="http://localhost/project/html/remarks.html" class="w3-bar-item w3-button">Remarks</a>
			
	</div>
	<div style="min-width: 720px; margin: 0 auto;">
		<div class="profile">
			<a href="http://localhost/project/account.php" title="User Profile">
				<img src="images/profile.png">
			</a>
		</div>

	<div class="page">
		<div class="item">
			<div class="heading">
				<h2>Hi, <?php echo $_SESSION['username']; ?>... Welcome to College Gate. </h2><br/><br/>
			</div>
			<form method="POST" action="http://localhost/project/search.php">
				<ul>
					<li><p>Enter best of 5 marks : 
					  <input type="number" name="marks" min="40" max="100" step="1" value="60"> %
					</p></li>
					<li><p>Select the Subject name: 
					<select name="subject">
						<option value="b">Bengali</option>
						<option value="a">English</option>
						<option value="c">Economics</option>
						<option value="c">Education</option>
						<option value="a">Geography</option>
						<option value="b">History</option>
						<option value="b">Journalism</option>
						<option value="c">Philosophy</option>
						<option value="b">Political Science</option>
						<option value="c">Psychology</option>
						<option value="b">Sanskrit</option>
						<option value="c">Sociology</option>
						<option value="b">Botany</option>
						<option value="a">Chemistry</option>
						<option value="a">Computer Science</option>
						<option value="b">Microbiology</option>
						<option value="a">Mathematics</option>
						<option value="a">Physics</option>
						<option value="c">Physiology</option>
						<option value="c">Psychology</option>
						<option value="b">Statistics</option>
						<option value="b">Zoology</option>
						<option value="b">Accounting & Finance</option>
					</select>
					</p></li>
					<li><p><button class="button button1" type="submit" value="Search">Search</button></p></li>
				</ul>
			</form>
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
		
			<div class="copyright">
				<p>@2018 Better future for Students. All Rights Reserved. <p><span>Designed with by Subrata, Kunal, Ankita   Website Images by Us and Google</span></p></p>	
			</div>
		</footer>
</body>
</html>