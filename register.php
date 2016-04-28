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
			//mysql_query("INSERT INTO programs(sno,user_rollno) VALUES('1','$roll')");
			//mysql_query("INSERT INTO programs(sno,user_rollno) VALUES('2','$roll')");
			//mysql_query("INSERT INTO programs(sno,user_rollno) VALUES('3','$roll')");
			mysql_query("CREATE TABLE `article-management-system`.`$uname` ( `sno` INT(3) NOT NULL AUTO_INCREMENT , `user_rollno` VARCHAR(15) NOT NULL , PRIMARY KEY (`sno`)) ENGINE = InnoDB");
			mysql_query("INSERT INTO $uname(sno,user_rollno) VALUES(1,'$uname'),(2,'$uname'),(3,'$uname')");

			header("Location:index.php");
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

<div id="login-form">
<form method="post">
<table align="right" width="35%" border="0">
<tr>
	<td><h1>Register</h1></td>
</tr>
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
</table>
</form>
</div>

</body>
</html>
