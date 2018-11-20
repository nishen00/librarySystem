<?php 

$con=mysqli_connect("localhost","root","","elibrary");

$data = json_decode(file_get_contents("php://input"));
$Rclientname = mysqli_real_escape_string($con, $data->Rclientname);
$addresse = mysqli_real_escape_string($con, $data->address);
$nic = mysqli_real_escape_string($con, $data->nic);
$mobile = mysqli_real_escape_string($con, $data->mobile);
$birthday = mysqli_real_escape_string($con, $data->birthday);
$gender = mysqli_real_escape_string($con, $data->gender);
$fee = mysqli_real_escape_string($con, $data->fee);
$Tel = mysqli_real_escape_string($con, $data->Tel);
$clientID=uniqid('client',true);

$query="INSERT INTO client (clientID, ClientName, Address, NicNumber, Mobile, Gender, Birthday, TelPhone, RegisterFee) VALUES ('".$clientID."','".$Rclientname."','".$addresse."','".$nic."','".$mobile."','".$gender."','".$birthday."','".$Tel."','".$fee."')";

mysqli_query($con,$query);

$in="Record has been inserted";

echo json_encode($in);







 ?>