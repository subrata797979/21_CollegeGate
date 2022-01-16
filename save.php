<?php
include './configDb.php';
session_start();
$email=$_SESSION['email'];
//for hiding errors
error_reporting(E_PARSE | E_ERROR);

$c_id=$_POST['done'];

// $con=mysqli_connect('localhost','root');
// $select=mysqli_select_db($con,'project');

$q="UPDATE user SET college_id = '$c_id' WHERE email ='$email'";

$res=mysqli_query($con,$q);
mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Save
	</title>
	<div style="min-width: 900px; margin: 0 auto;">
	<style type="text/css">
		body {
			background-image:url(images/ok.jpg);
			background-attachment: fixed;
		}
		.page{
			margin:100px;
			margin-top: 30px;
			padding: 30px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		  	text-align: center;
		  	opacity: 0.7;
		  	background-color: #323232;
		}
		.item {
			text-align:center;
			padding: 100px;
			margin:1px;
		}
		.heading{
			color:orange;
			font-size:28px;
			margin: 30px;
		}
		.button{
			background-color: green;
			color:white;
			padding:5px;
			border:solid orange;
			padding: 5px 70px;
			font-size: 20px;
			transition-duration: 0.4s;
		}
		.button:hover {
    		background-color: orange;
    		color: white;
		}
		.p{
			color: black;
			outline-style: none;
			font-size: 18px;
			padding: 20px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			font-family: comic sans;
		}
		.p:hover{
			background-color: red;
			padding: 25px;
			color:white;
			font-size: 20px;
			opacity: 2;
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
		.home{
			margin-left: 40%;
			margin-right: 40%;
			text-align: middle;
			color: orange;
			padding: 5px;
			border: 3px dashed white;
		}
		.home:hover{
			background-color: orange;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			font-family: comic sans;
			color: white;
		}
		.icon{
			padding: 24px;
			padding-bottom: 5px;
			padding-top: 10px;

		}






		/*footer*/
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

	<div class="profile">
		<a href="./account.php" title="User Profile">
			<img src="images/profile.png">
		</a>
	</div>
	<div class="page">
		<div class="item">
			<div class="heading">
				Your selection has been saved successfully		
				<p><img style="resize: auto;" src="./images/th.gif"></p>		
			</div>
			
			<p>Write your review about our website</p>
			<div>
				<input type="textbox" name="textbox">
				<button>Submit</button>
			</div>
			<br>
			<br>
			<div>
				<a href="./end.php"><button class="button">Sign Out</button></a>
			</div>
			<br>
			<br>
			
		</div>
		
	</div>
		<footer class="w3-container w3-tale ">
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



