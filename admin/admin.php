<?php
$con=mysqli_connect("localhost","root","hey","article-management-system");
	 	session_start();
  	if(!isset($_SESSION['user']))
  	{
  		header("Location:index.php");
  	}
  	
  	$user=$_SESSION['user'];
    $result=mysqli_query($con,"SELECT user_name from users where user_name='$user'");
    $out=mysqli_fetch_array($result);

    //posting the program in database here
    $progra=$_POST['progr'];
    $labn=$_POST['lab'];
    
    mysqli_query($con,"ALTER TABLE `users` ADD `qstn$labn` VARCHAR(5000) NULL AFTER `user_pass`");
    mysqli_query($con,"UPDATE users set `qstn$labn`='$progra' where user_name='$user'");

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
<div id="post-form">
<table align="center" width="80%" border="0">
    <tr>
    <td>
         <label><button><?php echo "Welcome Admin "; echo $user; ?></button></label>      
    </td>
    <tr>
    <td><a href="logout.php"><button>Logout</button></a></td>
  </tr>
  </tr>
</table>
<table align="center" width="80%" border="0">
  <tr>
    <td><a href="addquestion.php"><button>Add Questions</button></a></td>
    <td><a href="questions.php"><button>View Questions</button></a></td>
  </tr>
  <tr>
  <td><a href="submissions.php"><button>View submissions</button></a></td>
   <td><a href="plagiarism.php"><button>Check for plagiarism</button></a></td> 
  </tr>
  </table>
</div>
</center>
</body>
</html>