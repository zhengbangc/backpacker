<<<<<<< HEAD
<?php
session_start();
?>

=======
>>>>>>> origin/master
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>Backpacker</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
    
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
    
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    
    <script src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/smoothscroll.js"></script> 
    <script src="assets/js/Chart.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#nav">

	<div id="section-topbar">
		<div id="topbar-inner">
			<div class="container">
				<div class="row">
					<div class="dropdown">
						<ul id="nav" class="nav">
							<li class="menu-item"><a class="smoothScroll" href="login.php" title="About"><i class="icon-user"></i></a></li>
							<li class="menu-item"><a class="smoothScroll" href="#resume" title="Resume"><i class="icon-file"></i></a></li>
							<li class="menu-item"><a class="smoothScroll" href="#work" title="Works"><i class="icon-briefcase"></i></a></li>
							<li class="menu-item"><a class="smoothScroll" href="#contact" title="Contact"><i class="icon-envelope"></i></a></li>
						</ul><!--/ uL#nav -->
					</div><!-- /.dropdown -->

					<div class="clear"></div>
				</div><!--/.row -->
			</div><!--/.container -->

			<div class="clear"></div>
		</div><!--/ #topbar-inner -->
	</div><!--/ #section-topbar -->
	
	<div id="headerwrap">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-12">
					<h1>Backpacker</h1>
					<h3>CS 411 Project</h3>
					<h3><em>Yifei Li, Bangqi Wang <br>Shengze Wang, Zhengbang Chen</em><h3>
				</div><!--/.col-lg-12 -->
			</div><!--/.row -->
		</div><!--/.container -->
	</div><!--/.#headerwrap -->
	
			<?php
			$servername = "engr-cpanel-mysql.engr.illinois.edu";
			$username= "backpack_zbc";
			$password="123456";
			$dbname="backpack_user";

			//Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);

			//Check connection
			// if(mysqli_connect_error()){
			// 	die("Database connection failed: " .mysqli_connect_error());
			// }
			// echo "Connected sucessfully<br><br>";
			?>

	<section id="about" name="about"></section>
	<div id="intro">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-2 col-lg-offset-1">
					<h5><?php
								// echo "What the fuck doesn't this work?"
							$sql = "SELECT * FROM post WHERE writer_username = 'Zhengbang'";
							$result = mysqli_query($conn, $sql);
							$row = mysqli_fetch_assoc($result);
							echo $row["writer_username"];
					?></h5>
				</div>
				<div class="col-lg-6">
					<p><?php
								// echo "What the fuck doesn't this work?"
							// $sql = "SELECT * FROM post";
							// $result = mysqli_query($conn, $sql);
							// $row = mysqli_fetch_assoc($result);
							echo $row["content"];
					?></p>
					<br>
				

				</div>
				<div class="col-lg-3">
					<p><?php
								// echo "What the fuck doesn't this work?"
							// $sql = "SELECT * FROM post";
							// $result = mysqli_query($conn, $sql);
							// $row = mysqli_fetch_assoc($result);
							echo $row["location"];
					?></p>
				</div>
				
			</div><!--/.row -->
		</div><!--/.container -->
	</div><!--/ #intro -->

	<section id="about" name="about"></section>
	<div id="intro">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-2 col-lg-offset-1">
					<h5><?php
								// echo "What the fuck doesn't this work?"
							$sql = "SELECT * FROM post WHERE writer_username='Bangqi'";
							$result = mysqli_query($conn, $sql);
							$row = mysqli_fetch_assoc($result);
							echo $row["writer_username"];
					?></h5>
				</div>
				<div class="col-lg-6">
					<p><?php
								// echo "What the fuck doesn't this work?"
							echo $row["content"];
					?></p>
					<br>
				

				</div>
				<div class="col-lg-3">
					<p><?php
								// echo "What the fuck doesn't this work?"
							echo $row["location"];
					?></p>
				</div>
				
			</div><!--/.row -->
		</div><!--/.container -->
	</div><!--/ #intro -->

	<!-- <section id="resume" name="resume"></section>
	<div class="container desc">
		<div class="row">

				<div class="col-lg-2 col-lg-offset-1">
					<h5>EDUCATION</h5>
				</div>
				<div class="col-lg-6">
					<p><t>Master of Web Design</t><br/>
						St. Patrick University <br/>
						<i>3 Years Course</i>
					</p>
				</div>
				<div class="col-lg-3">
					<p><sm>GRADUATING IN MAY 2014</sm><br/>
					<imp><sm>IN PROGRESS</sm></imp>
					</p>
				</div>
	
				<div class="col-lg-6 col-lg-offset-3">
					<p><t>Degree of Web Developer</t><br/>
						Hastings University <br/>
						<i>2 Years Course</i>
					</p>
				</div>
				<div class="col-lg-3">
					<p><sm>JUNE 2012</sm></p>
				</div>
	
		</div>
		<br>
		<hr>
	</div> -->
	
	<!-- Footer -->
					<footer id="footer">
						<ul class="copyright">
							<li>&copy; backpacker</li><li>2015 All Rights Reserved</li>
						</ul>
					</footer>
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.js"></script>
  </body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> origin/master
