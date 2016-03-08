<?php

if(isset($_SESSION['user'])!="")
{
	header("Location: main.php");
}
include_once 'dbconnect.php';

if(isset($_POST['btn-signup']))
{
	$uname = mysql_real_escape_string($_POST['uname']);
	$roll=mysql_real_escape_string($_POST['roll']);
	$email = mysql_real_escape_string($_POST['email']);
	$upass = mysql_real_escape_string($_POST['pass']);
	
	$uname = trim($uname);
	$roll=trim($roll);
	$email = trim($email);
	$upass = trim($upass);
	
			
		if(mysql_query("INSERT INTO users(user_name,user_roll,user_email,user_pass) VALUES('$uname','$roll','$email','$upass')"))
		{
			header("Location:login.php");
			?>
			
			<?php
		}
		else
		{
			?>
			<script>alert('error while registering you...');</script>
			<?php
		}		
	
		
}
?>
<!DOCTYPE html>
<head>
<title>Register - Article Management System</title>
<link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>
<center>
<div id="login-form">
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="uname" placeholder="Name" required /></td>
</tr>
<tr>
<td><input type="text" name="roll" placeholder="Roll No." required /></td>
</tr>
<tr>
<td><input type="email" name="email" placeholder="Email" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Choose Password" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-signup">Register</button></td>
</tr>
<tr>
<td><a href="index.php">Sign In</a></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>

?>