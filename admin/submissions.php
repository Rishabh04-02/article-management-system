<?php
$con=mysqli_connect("localhost","root","hey","article-management-system");
	  	  	
  	session_start();
    if(!isset($_SESSION['user']))
    {
      header("Location:index.php");
    }
    
  	$user=$_SESSION['user'];
  	$no=$_POST['labno'];

    for ($i=21; $i < 40; $i++) { 
     $usrs[$i]=mysqli_query($con,"SELECT user_id,user_name,user_roll from users where user_id=$i ");

    }

    for($i=21;$i<40;$i++)
    {
      while($out=mysqli_fetch_array($usrs[$i]))
      {
        $n[$i]=$out['user_name'];
      }
      //echo "$i";
      //echo "$n[$i]<br>";
      $result[$i]=mysqli_query($con,"SELECT sno,user_rollno,$no from $n[$i] ");      
    }


?>

<!DOCTYPE html>
<html>
<head>
	<title>Submissions</title>
	<link rel="stylesheet" href="../style.css" type="text/css" />
</head>
<body>
<?php 
	include_once "./heading.php";
?>
<center>
<a href="admin.php"><button>Return Back</button></a>
<a href="logout.php"><button>Logout</button></a>


<br/><br/>
Choose a Lab to view its submissions<br/><br/>
<?php
$nam="labno";
for ($i=1; $i < 2 ; $i++) {
$j=$i+1; 
$k=$i+2; 
$l=$i+3; 
$m=$i+4; 
$n=$i+5; 
$o=$i+6; 
$p=$i+7; 
print("<form method=post>");
print("<input type=submit name=$nam value=lab$i >");
print("<input type=submit name=$nam value=lab$j >");
print("<input type=submit name=$nam value=lab$k >");
print("<input type=submit name=$nam value=lab$l >");
print("<input type=submit name=$nam value=lab$m >");
print("<input type=submit name=$nam value=lab$n >");
print("<input type=submit name=$nam value=lab$o >");
print("<input type=submit name=$nam value=lab$p >");
//print("<input type=submit value=lab$i >");
print("</form>");
}

?>

<br/>
<?php 
if ($no=="") {
  print("<div id=redd>");
	echo "<b>Please enter lab no. above to view result</b><br>";
	print("</div>");
}
else {
	$ab=$no;
	echo "<b>You are viewing submissions of lab no. $ab </b><br><br>";
	print("<table>");
print("<tr>");
print("<td><h1>Username</h1></td>");
print("<td><h1>Prog-no.</h1></td>");
print("<td><h1>Program</h1></td>");
print("</tr>");
}


for ($abi=21; $abi < 35; $abi++)
{ 
  
  $i=0;
      while($out=mysqli_fetch_array($result[$abi]))
      {
        $i++;
        $na=$out['user_rollno'];
        $noa=$out['sno'];
        $ld=$out['2'];

                
        ?>
        <tr>
        <td><?php echo $na; ?></td>
        <td><?php echo $noa; ?></td>
        <td><?php echo $ld; ?></td>
        </tr>
        <?php
      }

}
        
      ?>
      

</table>
</center>

</body>
</html>