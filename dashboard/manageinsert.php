<?php 

$con=mysqli_connect("localhost","root","","elibrary");

$data = json_decode(file_get_contents("php://input"));
$clientid = mysqli_real_escape_string($con, $data->clientid);
$clientName = mysqli_real_escape_string($con, $data->clientName);
$clientphone = mysqli_real_escape_string($con, $data->clientphone);
$bookid = mysqli_real_escape_string($con, $data->bookid);
$bookname = mysqli_real_escape_string($con, $data->bookname);
$issuedate = mysqli_real_escape_string($con, $data->issuedate);
$returndate = mysqli_real_escape_string($con, $data->returndate);

$manageid=uniqid('Issue',true);

$query="INSERT INTO management(ManageId, ClientId, ClientName, BookId, BookName, IssueDate, ReturnDate, PhoneNumber) VALUES ('".$manageid."','".$clientid."','".$clientName."','".$bookid."','".$bookname."','".$issuedate."','".$returndate."','".$clientphone."')";

mysqli_query($con,$query);

$in="Record has been inserted";

echo json_encode($in);







 ?>