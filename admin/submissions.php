<?php
$con=mysqli_connect("localhost","root","hey","article-management-system");
	  	  	
  	session_start();
  	$user=$_SESSION['user'];
  	$no=$_POST['labno'];
    //505
    $usrs="try";
    $result1=mysqli_query($con,"SELECT sno,user_rollno,$no from $usrs order by user_rollno asc ");
    //506
    $usrs="Vidushi";
    $result2=mysqli_query($con,"SELECT sno,user_rollno,$no from $usrs order by user_rollno asc ");
    //507
    $usrs="Amandeep";
    $result3=mysqli_query($con,"SELECT sno,user_rollno,$no from $usrs order by user_rollno asc ");
    //508
    $usrs="rishabh0402";
    $result4=mysqli_query($con,"SELECT sno,user_rollno,$no from $usrs order by user_rollno asc ");
    //509
    $usrs="Chanderkanta";
    $result5=mysqli_query($con,"SELECT sno,user_rollno,$no from $usrs order by user_rollno asc ");
    //510
    $usrs="abhishek";
    $result6=mysqli_query($con,"SELECT sno,user_rollno,$no from $usrs order by user_rollno asc ");
    //522
    $usrs="lokesh";
    $result7=mysqli_query($con,"SELECT sno,user_rollno,$no from $usrs order by user_rollno asc ");
    //$result=mysqli_query($con,"SELECT user_rollno,$no from programs where user_rollno='$user' ");
    

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

<!--
<form method="post">
	
<?php 
/*$nam="labno";
$typ="checkbox";
$ab="submit";
for ($i=1; $i <8 ; $i++) { 
	print("<input name=$nam type=$typ value=$i> Lab $i | ");
  //print("<input name=$nam type=$typ value=$i type=$ab >");
}
*/
?>
 <input type="submit" value="send">
	<input type="reset" value="reset"> 
</form> -->
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
  

    $i=0;
      while($out=mysqli_fetch_array($result1))
      {
        $i++;
        $n=$out['user_rollno'];
        $noa=$out['sno'];
        $l=$out['2'];
               	
        ?>
        <tr>
        <td><?php echo $n; ?></td>
        <td><?php echo $noa; ?></td>
        <td><?php echo $l; ?></td>
        </tr>
        <?php

      }
      ?>
      <?php

$i=0;
      while($out=mysqli_fetch_array($result2))
      {
        $i++;
        $n=$out['user_rollno'];
        $noa=$out['sno'];
        $l=$out['2'];
                
        ?>
        <tr>
        <td><?php echo $n; ?></td>
        <td><?php echo $noa; ?></td>
        <td><?php echo $l; ?></td>
        </tr>
        <?php

      }

?>
<?php

$i=0;
      while($out=mysqli_fetch_array($result3))
      {
        $i++;
        $n=$out['user_rollno'];
        $noa=$out['sno'];
        $l=$out['2'];
                
        ?>
        <tr>
        <td><?php echo $n; ?></td>
        <td><?php echo $noa; ?></td>
        <td><?php echo $l; ?></td>
        </tr>
        <?php

      }

?>
<?php

$i=0;
      while($out=mysqli_fetch_array($result4))
      {
        $i++;
        $n=$out['user_rollno'];
        $noa=$out['sno'];
        $l=$out['2'];
                
        ?>
        <tr>
        <td><?php echo $n; ?></td>
        <td><?php echo $noa; ?></td>
        <td><?php echo $l; ?></td>
        </tr>
        <?php

      }

?>
<?php

$i=0;
      while($out=mysqli_fetch_array($result5))
      {
        $i++;
        $n=$out['user_rollno'];
        $noa=$out['sno'];
        $l=$out['2'];
                
        ?>
        <tr>
        <td><?php echo $n; ?></td>
        <td><?php echo $noa; ?></td>
        <td><?php echo $l; ?></td>
        </tr>
        <?php

      }

?>
<?php

$i=0;
      while($out=mysqli_fetch_array($result6))
      {
        $i++;
        $n=$out['user_rollno'];
        $noa=$out['sno'];
        $l=$out['2'];
                
        ?>
        <tr>
        <td><?php echo $n; ?></td>
        <td><?php echo $noa; ?></td>
        <td><?php echo $l; ?></td>
        </tr>
        <?php

      }

?>
<?php

$i=0;
      while($out=mysqli_fetch_array($result7))
      {
        $i++;
        $n=$out['user_rollno'];
        $noa=$out['sno'];
        $l=$out['2'];
                
        ?>
        <tr>
        <td><?php echo $n; ?></td>
        <td><?php echo $noa; ?></td>
        <td><?php echo $l; ?></td>
        </tr>
        <?php

      }

?>

</table>
</center>

</body>
</html>