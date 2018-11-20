<?php 

$con=mysqli_connect("localhost","root","","elibrary");

$data = json_decode(file_get_contents("php://input"));
$bookname = mysqli_real_escape_string($con, $data->bookname);
$section = mysqli_real_escape_string($con, $data->section);
$author = mysqli_real_escape_string($con, $data->author);
$numofcopy = mysqli_real_escape_string($con, $data->numofcopy);
$catogory = mysqli_real_escape_string($con, $data->catogory);
$bookid=uniqid('BOOK',true);


$query="INSERT INTO book( `BookID`, `BookName`, `Section`, `Author`, `NumOfCopy`, `catagory`) VALUES ('".$bookid."','".$bookname."','".$section."','".$author."','".$numofcopy."','".$catogory."')";

mysqli_query($con,$query);

$in="Record has been inserted";

echo json_encode($in);







 ?>