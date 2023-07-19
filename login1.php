<?php
$conn=new mysqli('localhost','root','','bloom');
if(!$conn)
{
	die('unable to connect');
}

$m1=$_POST['n1'];
$m2=$_POST['n2'];


if($m1=='chahat' && $m2=='password')

	echo "<script>alert('Login Successfully');
        location.href='main.php';</script>";

else
  	echo "<script>alert('Login Failed');
        location.href='login.php';</script>";
	
mysqli_close($conn);
?>
