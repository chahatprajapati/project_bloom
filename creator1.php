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
        location.href='bloom.php';</script>";

else
  	echo "<script>alert('Login Failed');
        location.href='creator.php';</script>";
	
mysqli_close($conn);
?>
