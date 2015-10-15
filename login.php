<?php
include('checklogin.php'); // Includes Login Script

//if(isset($_SESSION['login_user'])){
//header("location: index.php");
//}
?>

<html>
<head>
<title>Log in</title>
<link href="login.css" rel="stylesheet">
<script type="text/javascript" src="login.js"></script>
</head>

<body>
<form action="" method="post" autocomplete="off">
  <h2><span class="entypo-login"></span> Login</h2>
  <button name="submit" class="submit"><span class="entypo-lock"></span></button>
  <span class="entypo-user inputUserIcon"></span>
  <input name="username" type="text" class="user" placeholder="ursername"/>
  <span class="entypo-key inputPassIcon"></span>
  <input name="password" type="password" class="pass"placeholder="password" />
  <span>  <?php echo $error; ?></span>
</form>
</body>
</html>