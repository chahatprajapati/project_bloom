<?php
$conn=new mysqli('localhost','root','','form');
if(!$conn)
{
	die('unable to connect');
}

$m1=$_POST['n1'];
$m2=$_POST['n2'];


if($m1=="shanu" && $m2=="hello")

	echo "<script>alert('Login Successfully');
        location.href='home.php';</script>";

else
  	echo "<script>alert('Login Failed');
        location.href='adminlogin.php';</script>";
	
mysqli_close($conn);
?>
