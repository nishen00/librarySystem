<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "elibrary");

$result = $conn->query("SELECT clientID, ClientName, Address, NicNumber, Mobile, Gender, Birthday, TelPhone, RegisterFee FROM client");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"clientID":"'  . $rs["clientID"] . '",';
    $outp .= '"ClientName":"'   . $rs["ClientName"]        . '",';
    $outp .= '"Address":"'. $rs["Address"]     .  '",';
    $outp .= '"NicNumber":"'. $rs["NicNumber"]     . '",';
    $outp .= '"Mobile":"'. $rs["Mobile"]     .  '",';
    $outp .= '"Gender":"'. $rs["Gender"]     .  '",';
    $outp .= '"Birthday":"'. $rs["Birthday"]     .  '",';
    $outp .= '"TelPhone":"'. $rs["TelPhone"]     .  '",';
    $outp .= '"RegisterFee":"'. $rs["RegisterFee"]     .  '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>