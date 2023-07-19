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

$l=strlen($m2);

if($l<10)

echo "<script>alert('Length is too short :)');
location.href='contact.php';</script>";

if($l>10)

echo "<script>alert('Length is too long :)');
location.href='contact.php';</script>";

else


$sql="insert into contact values('$m1','$m2','$m3','$m4');";


if(mysqli_query($conn,$sql))

echo "<script>alert('Your Information is added succesfully :)');
location.href='bloom.php';</script>";

else
  	echo "<script>alert(' Try again');</script>";
	
mysqli_close($conn);
?>
