<?php
$con=mysqli_connect("localhost","root","hey","article-management-system");
	 	session_start();
  	if(!isset($_SESSION['user']))
  	{
  		header("Location:index.php");
  	}
$user=$_SESSION['user'];
  	?>
<!DOCTYPE html>
<head>
<title>Article Management System</title>
<link rel="stylesheet" href="../style.css" type="text/css" />
</head>
<body>
<?php 
	include_once "./heading.php";
?>
<center>
<a href="admin.php"><button>Return Back</button></a>
<a href="logout.php"><button>Logout</button></a>
<br/><br/><br/><br/>
	<h1>This page is under Development</h1><br/><br/><br/>
	<a href="admin.php"><button>Return Back</button></a>
	<a href="logout.php"><button>Logout</button></a>
</center>
</body>
</html>