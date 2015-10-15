<?php
$servername = "engr-cpanel-mysql.engr.illinois.edu";
$username= "backpack_zbc";
$password="123456";
$dbname="backpack_user";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection
if(mysqli_connect_error()){
	die("Database connection failed: " .mysqli_connect_error());
}
echo "Connected sucessfully<br><br>";

//Select some data from the database
$sql = "SELECT * FROM user";
$result = mysqli_query ($conn, $sql);

if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
		echo" username:" . $row["user_name"];
	}
}
else 
{
	echo "0 Results";
}

mysqli_close($conn);

?>