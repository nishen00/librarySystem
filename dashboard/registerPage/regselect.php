<?php 

$con=mysqli_connect("localhost","root","","elibrary");

$data = json_decode(file_get_contents("php://input"));
$username = mysqli_real_escape_string($con, $data->username);
$password = mysqli_real_escape_string($con, $data->Password);


$query="SELECT * FROM user WHERE UserName='".$username."' AND Password='".$password."'";

$result=mysqli_query($con,$query);

if(mysqli_num_rows($result)>0)
{


	$n='fales';
}
else {
	$n='donee';
}


  echo json_encode($n);



 ?>