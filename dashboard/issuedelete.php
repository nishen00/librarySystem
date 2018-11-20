<?php 

$con=mysqli_connect("localhost","root","","elibrary");

$data = json_decode(file_get_contents("php://input"));
$ManageId = mysqli_real_escape_string($con, $data->ManageId);

$query="DELETE FROM management WHERE 		ManageId='$ManageId'";

mysqli_query($con,$query);

$in="Record has been deleted";

echo json_encode($BookID);







 ?>