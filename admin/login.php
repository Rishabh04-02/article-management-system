<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user'])!="")
{
	header("Location: admin.php");
}

if(isset($_POST['btn-login']))
{
	$roll = mysql_real_escape_string($_POST['roll']);
	$upass = mysql_real_escape_string($_POST['pass']);
	
	$roll = trim($roll);
	$upass = trim($upass);
	
	$res=mysql_query("SELECT id, pswd FROM adm WHERE id='$roll'");
	$row=mysql_fetch_array($res);
	
	$count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
	
	if($count == 1 && $row['pswd']==($upass))
	{
		$_SESSION['user'] = $row['id'];
	    header("Location: admin.php");
      
	}
	else
	{
		?>
        <script>alert('Username / Password Seems Wrong !');</script>
        <?php
	}
	
}
?>
<!DOCTYPE html>
<head>
<title>login - Article Management System</title>
<link rel="stylesheet" href="../style.css" type="text/css" />
</head>
<body>
<center>
<div id="login-form">
<form method="post">
<table align="left" width="35%" border="0">
<tr>
	<td><h1>Login</h1></td>
</tr>
<tr>
<td><input type="text" name="roll" placeholder="Unique id" title="Unique id" required /></td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Password" title="Your password here please" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-login">Login</button></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>