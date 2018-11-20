<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "elibrary");

$result = $conn->query("SELECT ManageId, ClientId, ClientName, BookId, BookName, IssueDate, ReturnDate, PhoneNumber FROM management");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"ManageId":"'  . $rs["ManageId"] . '",';
    $outp .= '"ClientId":"'   . $rs["ClientId"]  . '",';
    $outp .= '"ClientName":"'. $rs["ClientName"]  .  '",';
    
    $outp .= '"BookId":"'. $rs["BookId"]  .  '",';
    $outp .= '"BookName":"'. $rs["BookName"]  .  '",';
  
    $outp .= '"IssueDate":"'. $rs["IssueDate"]  .  '",';
    $outp .= '"ReturnDate":"'. $rs["ReturnDate"]  .  '",';
    $outp .= '"PhoneNumber":"'. $rs["PhoneNumber"]  .  '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>