<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "elibrary");

$result = $conn->query("SELECT FirstName, LastName, Email,PhoneNumber FROM user");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"FirstName":"'  . $rs["FirstName"] . '",';
    $outp .= '"LastName":"'   . $rs["LastName"]        . '",';
    $outp .= '"Email":"'. $rs["Email"]     .  '",';
    $outp .= '"PhoneNumber":"'. $rs["PhoneNumber"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>