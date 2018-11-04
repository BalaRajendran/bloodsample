<!DOCTYPE html>
<html>
<head>
<title>Login</title> 
<link rel="stylesheet" href="custom1.css">
<script type="text/javascript" src="custom.js"></script>
</head>
<body>
	<br/><br/>
  <form action="CheckLogin.php" method="post">
    <h2><span class="entypo-login"></span> Login</h2>
    <button class="submit"><span class="entypo-lock"></span></button>
    <span class="entypo-user inputUserIcon"></span>
    <input type="text" name="email" class="user" placeholder="User Email" required="" 
      value="<?php if(isset($_COOKIE['user_name'])) { echo $_COOKIE['user_name']; } ?>" />
    <span class="entypo-key inputPassIcon"></span>
    <input type="password" name="password" class="pass" placeholder="password" required="" 
      value="<?php if(isset($_COOKIE['user_pass'])) { echo $_COOKIE['user_pass']; } ?>"/>
   <input type="checkbox" name="remember" value="true" class="remember" <?php if (isset($_COOKIE['user_name'])) { echo 'checked'; } ?> />
	<span class="remember_span">Remember me</span>
	      <?php session_start(); if(isset($_SESSION['err'])){ ?>
    <h2>error.....<?php echo $_SESSION['err']; ?></h2>
    <?php session_unset(); } ?>
  </form>
</body>
</html>