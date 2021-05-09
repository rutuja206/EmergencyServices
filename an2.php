<?php

$username=$_POST['username'];
$password=$_POST['password'];

$conn=mysqli_connect("localhost","root","","register");

$result=mysqli_query($conn,"SELECT from 'rgs' WHERE username='$username' && password='$password'");


$count=mysqli_num_rows($result);
if($count==1)
{
	echo "login successfully";
	header('location: Index.php');

}

else
{
	echo "incorrect info";
	header('location: an.php');
}

?>
