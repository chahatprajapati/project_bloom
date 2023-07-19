<?php
$conn=new mysqli('localhost','root','','bloom');
if(!$conn)
{
	die('unable to connect');
}

$m1=$_POST['n1'];
$m2=$_POST['n2'];

$sql="insert into suggest values('$m1','$m2');";

if(mysqli_query($conn, $sql))

echo "<script> alert('Your Information is added successfully :)');
location.href='bloom.php';</script>";

else
  	echo "<script>alert('Try again');</script>";
	
mysqli_close($conn);

?>
