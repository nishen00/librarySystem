<?php 

$con=mysqli_connect("localhost","root","","elibrary");

$data = json_decode(file_get_contents("php://input"));
$BookID = mysqli_real_escape_string($con, $data->BookID);

$query="DELETE FROM book WHERE 	BookID='$BookID'";

mysqli_query($con,$query);

$in="Record has been deleted";

echo json_encode($BookID);







 ?>