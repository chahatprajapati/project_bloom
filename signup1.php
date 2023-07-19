<?php
$conn=new mysqli('localhost','root','','bloom');
if(!$conn)
{
	die('unable to connect');
}

$m1=$_POST['n1'];
$m2=$_POST['n2'];
$m3=$_POST['n3'];
$m4=$_POST['n4'];

$sql="insert into signup values('$m1','$m2','$m3','$m4');";

if($m3==$m4)
	echo "<script>alert('successfully');
	location.href='login.php';</script>";
else
    echo "<script>alert('check password');
    location.href='signup.php';</script>";
    
if(mysqli_query($conn,$sql))

echo "<script>alert('Login Successfully');
location.href='login.php';</script>";

else
  	echo "<script>alert('Login Failed');
        location.href='bloom.php';</script>";
	
mysqli_close($conn);
?>
