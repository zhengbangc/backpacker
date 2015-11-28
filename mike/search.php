
<html>
	<head>
		<title>Search Post</title>
	</head>
	<p><body>
		<h3>Search Post</h3>
		<p>You may search posts by location.</p>
		<form  method="post" action="">
			<input  type="text" name="content">
			<select name="search_type">
  			<option value="writer_username">Writer</option>
  			<option value="post_id">Post ID</option>
  			<option value="location">Location</option>
			<input  type="submit" name="submit" value="Search"><br>
			</select>
		</form>
		<?php
		if(isset($_POST['submit'])){
			$search_type = $_POST['search_type'];
			$search_res = $_POST['content'];
			$servername = "engr-cpanel-mysql.engr.illinois.edu";
			$username= "backpack_zbc";
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
		    	while($row = mysqli_fetch_assoc($result)) {
		        	echo "<h4>",$row['writer_username'],"</h4>","<br>";
		        	echo "<p>",$row['content'],"<p>","<br>";
		        	echo "<h4>",$row['location'],"<h4>","<br>";
				}
			} 
			else 
		    	echo "0 results";

			mysqli_close($conn);		
		}
		?>     
	</body>
</html>
</p>

