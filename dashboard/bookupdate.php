<?php 

$con=mysqli_connect("localhost","root","","elibrary");

$data = json_decode(file_get_contents("php://input"));
$bookID = mysqli_real_escape_string($con, $data->bookID);
$bookname = mysqli_real_escape_string($con, $data->bookname);
$section = mysqli_real_escape_string($con, $data->section);
$author = mysqli_real_escape_string($con, $data->author);
$numofcopy = mysqli_real_escape_string($con, $data->numofcopy);
$catogory = mysqli_real_escape_string($con, $data->catogory);

$query="UPDATE book SET BookName='$bookname',Section='$section',Author='$author',NumOfCopy='$numofcopy',catagory='$catogory' WHERE 	BookID='$bookID'";

mysqli_query($con,$query);

$in="Record has been updated";

echo json_encode($in);







 ?>