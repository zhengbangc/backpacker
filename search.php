<?php
  session_start();
?>


<!DOCTYPE html>
<html lang="en" style="height:100%;">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Search</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })

    </script>

    <script src="js/backpacker.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

		<title>Search Post</title>
	</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation" >
        <div class="container" height>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <a class="navbar-brand" href="index.php" style = "float:left; margin-right:0px;">BackPacker</a>
            <div style = "height: 60px;width:50%; margin-left:0px;margin-right:10px;float:left;">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="search.php">Search</a>
                    </li>
                    <li>
                        <a href="#">about us </a>
                    </li>
                    <li>
                        <div id="log"></div>
                    </li>
                </ul>            
            </div>
        </div>
        <!-- /.container -->
    </nav>


    <div style="padding-top:100px;">
        <div style="margin-left:auto; margin-right:auto;position:relative;width:100%; height:60%;
        position: absolute;top:0;bottom: 0;left: 0;right: 0;margin: auto;background-color:rgba(250,250,250,0);padding-top:10%;padding-bottom:3px;text-align:center;">

			<span style = "margin:10px; line-height:40px;color:white; font-size:30px;">Search Post</span><br>
			<form  method="post" action="">
				<input  tplaceholder="search" type="text" spellcheck="false" value="" id="search" name="content"
						style ="line-height: 21px; font-size:17px; height: 30px;border-radius:5px; 
							border:1px solid #AEAEAE; padding-left:8px;">
				<select name="search_type" style = "height: 30px;line-height:20px;">
		  			<option value="writer_username">Writer</option>
		  			<option value="post_id">Post ID</option>
		  			<option value="location">Location</option>
				</select>
				<input  type="submit" name="submit" value="Search" 
					style="border-radius:5px;border:1px solid #AEAEAE;background-color:white"><br>
			</form>
			  
		</div>
	</div>   
	
	
	
	
	<?php
		if(isset($_POST['submit'])){
			$search_type = $_POST['search_type'];
			$search_res = $_POST['content'];
			$servername = "localhost";
			$username= "root";
			$password="123456";
			$dbname="backpack_user";
			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection
			if (!$conn)
			   	die("Connection failed: " . mysqli_connect_error());
			
			if($search_type=='writer_username')
				$sql = "SELECT * FROM post WHERE writer_username = '$search_res'";
			else if($search_type=='post_id')
				$sql = "SELECT * FROM post WHERE post_id = '$search_res'";
			else if($search_type=='location')
				$sql = "SELECT * FROM post WHERE location = '$search_res'";

			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result)>0) {
		    	echo '<div style="margin-top:350px;">';
		    	while($row = mysqli_fetch_assoc($result)) {
        		echo '
           		 
           		<div class="row">
                	<div class="box">
                    	<div class="col-lg-12">
                        <hr>
                        <h2 class = "text-center">
                               <strong><em>'.$row["title"].'</em></strong>
                        </h2>

                        <h2 class = "intro-text text-center">
                            '.$row["date"].'
                         </h2>
                         <h2 class = "intro-text text-center">
                            '.$row["location"].'
                         </h2>
                        <hr>
                        <hr class="visible-xs">
                        <p class = "recent_post_container">
                            
                            '.$row["content"].'
                        </p>
                    </div>
                </div>
            </div>
        ';
        }
        echo '</div>';
    } 
    else {
        echo '<div style="margin-top:350px;">
            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <h2 class = "text-center">
                        0 Post Found.
                        </h2>       
                 
                    </div>
                </div>
            </div>
            </div>
        ';
    }		
		}
		?>
	
	
	
	</body>
</html>

		