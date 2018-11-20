<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "elibrary");

$result = $conn->query("SELECT 	BookID,BookName, Section,Author,NumOfCopy,catagory FROM book");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"BookID":"'  . $rs["BookID"] . '",';
    $outp .= '"BookName":"'. $rs["BookName"]     . '",';
    $outp .= '"Section":"'   . $rs["Section"]        . '",';
    $outp .= '"Author":"'. $rs["Author"]     .  '",';
    $outp .= '"NumOfCopy":"'. $rs["NumOfCopy"]     . '",';
    $outp .= '"catagory":"'. $rs["catagory"]     .  '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>