<?php 

$con=mysqli_connect("localhost","root","","elibrary");


$username = $_POST['username'];

$password = $_POST['pass'];


$query="SELECT * FROM user WHERE UserName='".$username."' AND Password='".$password."'";

$result=mysqli_query($con,$query);

if(mysqli_num_rows($result)>0)
{


	$n='fales';
	header('location:dashboard/dashboard.html');
}
else {
	$n='donee';
	echo $n;
	header('location:index.html');
}


 



 ?>