<?php 

$con=mysqli_connect("localhost","root","","elibrary");

$data = json_decode(file_get_contents("php://input"));
$clientid = mysqli_real_escape_string($con, $data->clientid);

$query="DELETE FROM client WHERE clientID='$clientid'";

mysqli_query($con,$query);

$in="Record has been deleted";

echo json_encode($BookID);







 ?>