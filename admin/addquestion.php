<?php
$con=mysqli_connect("localhost","root","hey","article-management-system");
	 	session_start();
  	if(!isset($_SESSION['user']))
  	{
  		header("Location:index.php");
  	}
  	
  	$user=$_SESSION['user'];
    $result=mysqli_query($con,"SELECT sno from questions ");
    $out=mysqli_fetch_array($result);

    //posting the program in database here
    $progra=$_POST['progr'];
    $qstnn=$_POST['qstn'];
    $labn=$_POST['lab'];
    //mysqli_query($con,"UPDATE users set program='$progra' where user_name='$user'");
    //mysqli_query($con,"UPDATE users set lab='$labn' where user_name='$user'");
   
   //ALTER TABLE `posts` ADD `trial` VARCHAR(40) NOT NULL AFTER `sno`;
    //mysqli_query($con,"ALTER TABLE `users` ADD `lab-$labn` VARCHAR(50) NULL AFTER `user_pass` where user_name='$user'");
    mysqli_query($con,"ALTER TABLE `questions` ADD `lab$labn` VARCHAR(1000) NOT NULL AFTER `sno`");
    mysqli_query($con,"UPDATE questions set `lab$labn`='$progra' where sno='$qstnn'");

?>
<!DOCTYPE html>
<head>
<link rel="stylesheet" href="../style.css" type="text/css" />
</head>
<body>
<?php 
	include_once "./heading.php";
?>
<center>
<a href="admin.php"><button>Return Back</button></a>
<a href="logout.php"><button>Logout</button></a>
<div id="post-form">
<form method="post">
<table align="left" width="78%" border="0">
<tr>
	<td><input type="number" name="lab" placeholder="Lab No." title="Please enter lab no." required /></td>

	<td><input type="number" name="qstn" placeholder="Question No." title="Please enter question no." required /></td>
</tr>
<tr>
<td><textarea type="text" rows="10" cols="105" name="progr" placeholder="Your Question here..." title="Please write your program here" required /></textarea>
</td>
</tr>
<td><button type="submit" name="btn-login">Submit</button></td>
<td><button type="reset" name="btn-login">Reset</button></td>
</tr>
</table>
</form>

<table align="right" width="20%" border="0">
	<tr>
		<td><a href="logout.php"><button>Logout</button></a></td>
	</tr>
	<tr>
		<td><a href="submissions.php"><button>Submissions</button></a></td>
	</tr>
	<tr>
		<td><a href="questions.php"><button>Questions</button></a></td>
	</tr>
</table>
</div>
</center>
</body>
</html>