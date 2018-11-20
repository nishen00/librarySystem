<?php 

$con=mysqli_connect("localhost","root","","elibrary");

$data = json_decode(file_get_contents("php://input"));
$firstName = mysqli_real_escape_string($con, $data->firstName);
$lastname = mysqli_real_escape_string($con, $data->lastname);
$email = mysqli_real_escape_string($con, $data->email);
$phone = mysqli_real_escape_string($con, $data->phone);
$username = mysqli_real_escape_string($con, $data->username);
$password = mysqli_real_escape_string($con, $data->Password);

$query="INSERT INTO user( `FirstName`, `LastName`, `Email`, `PhoneNumber`, `UserName`, `Password`) VALUES ('".$firstName."','".$lastname."','".$email."','".$phone."','".$username."','".$password."')";

mysqli_query($con,$query);

$in="Record has been inserted";

echo json_encode($in);







 ?>