<?php
session_start();
//for hiding errors
error_reporting(E_PARSE | E_ERROR);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		<title>
		Homepage
		</title> 
		<link rel="stylesheet" href="css/n2.css">
	</head>
	<body>
		<style type="text/css">

			body {
			background-image:url(images/ok.jpg);
			background-attachment: fixed;
			background-position: cover;
			background-repeat: no-repeat;
			}
			.fixed {
			    background-image: url("images/book.jpg");
			    min-height: 500px;
			    background-attachment: fixed;
			    background-position: center;
			    background-repeat: no-repeat;
			    background-size: cover;
			}
		
			#page{
				margin:0px;
			}
			a:link, a:visited {
		   	 color: white;
		  	  text-align: center; 
		   	 text-decoration: none;
			}

			a:hover, a:active {
			color:black;
			}
			
			.header-inner{
				color:green;
			}
			.header{
				position:absolute;
				margin-top:120px;
				top:0px;
				left:0px;
				width:100%;
				z-index:40;
				}
			.header ul{
					margin-left:5%;
					padding:5px;
					list-style:none;
				}		
			.header ul li{
					float:left;
					width:18%;
					height:40%;
					background-color:black;
					color:white;
					opacity:.6;
					line-height:150%;
					text-align:center;
					font-size:150%;
					margin-right:.2%;
					padding:.5%;
					font-family:monospace;
				}	
			.header ul li:hover
				{
					background-color:#2E7D32;
					opacity:.7;
				}

			.name{
				margin-top:40px;
				margin-left:5%;
				width:50%;
				color:green;
				position:absolute;
				top:0px;
				left:0px;
				font-weight:bold;
				font-family:arial;
				font-size:350%;
				z-index:50;	
			}

			#slider{
				position:relative;
				z-index:20;
				border-bottom: 2px solid black;
			}
			.quotes{
				width:100%;
				border-bottom: 2px solid black;
			}
			img{
				width:100%;
			}

			h3{
				color:#075b48;
				font-size:30px;
			}
			.card{
				margin:200px;
				padding: 64px;
				background-color:#000000;
				opacity: 0.8;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
				font-family: arial;
				font-size: 20px;
				line-height: 32px;
				color: #cccccc;
			}

			.c1{
				border-bottom: 3px solid green;
				font-size: 30px;
				margin-bottom: 5px;
				color: green;
			}
			.q{
				/*padding: 500px;*/
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



			/*Dropdown css ================================*/
			.dropbtn {
				background-color:green;
				color:white;
				padding: 0 50px 0 50px;
			    font-size:18px;
			    border: none;
			    cursor: pointer;
			}

			.dropdown {
			    position: relative;
			    display: inline-block;
			}

			.dropdown-content {
			    display: none;
			    background-color: white;
			    position: absolute;
			    min-width: 100px;
			    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			    z-index: 1;
			}

			.dropdown-content a {
			    color: black;
			    padding: 10px 30px;
			    text-decoration: none;
			    display: block;
			}

			.dropdown-content a:hover {background-color: #6fd184}

			.dropdown:hover .dropdown-content {
			    display: block;
			}

			.dropdown:hover .dropbtn {
			    background-color:green;
			}
			
			

		</style>



<!--Main html===========================================================================-->



	<div style="min-width: 900px; margin: 0 auto;">
	<div id="page">
		<div id="slider">
			<figure>
				<img src="images/c1.jpg">
				<img src="images/c2.jpg">
				<img src="images/c3.jpg">
				<img src="images/c4.jpg">
				<img src="images/c1.jpg">
			</figure>
			
			<div class="name">
				College Gate
			</div>
			
			<div class="header">
				<ul>
					<li><a href="./registration.php" class="link">REGISTER</a></li>

<!--PHP code=======================================================-->					
					<li><a href="./	
						<?php
							if(isset($_SESSION['username']))
								echo"session.php";
							else
								echo"login.php";
						?>" 

					class="link">LOGIN</a></li>
					<li><a href="html/about.html" class="link">ABOUT US</a></li>
					<li><a href="html/contact.html" class="link">CONTACT US</a></li>
					<li style=" background-color: green;">
						<div class="dropdown">
							<a href="#"class="dropbtn">MORE</a>
								<div class="dropdown-content">
								<a href="html/help.html">HELP</a>
								<a href="html/report.html">REPORT</a>
								<a href="html/remarks.html">REMARKS</a>
						</div>
					</li>	
				</ul>
			</div>
		</div>

		<div class="q">
			<img src="images/computer.jpg">
			<div class="t1">
				Let us make our future now, and let us make our dreams tomorrow's reality.
			</div>
		</div>


		<div class="fixed" style="padding: 30px; padding-top: 200px; padding-bottom: 200px;">
			<div class="card">
				<div class="c1">
					<!-- heading -->
					Why Choose Us ???!!!
				</div>
				<br>	
				<div class="c2">
					<!-- body -->
					We provide best list as per your choice and try our best to fullfill your statisfaction. Supports are always there whenever you need us. 24hrs support. All the details are provided in this website. Now, its time to choose your dream college and make a better future. We are always with you.
				</div>
			</div>
		</div>


		<div class="q">
			<img src="images/people.jpg">
			<div class="t2">
				The best preparation for tomorrow is doing your best today.
			</div>
		</div>

		<div class="quotes">
			<img src="images/img.jpg">
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

	</div>


	</body>
</html>
	