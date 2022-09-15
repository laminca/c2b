<?php

header("Content-Type: application/json");

$response = '{
    "ResultCode": 0,
    "ResultDesc":"Confirmation Received Successfully"

}';
//Data
$mpesaResponse = file_get_contents('php://input');


$logfile=dirname(__FILE__).'/laminca-c2b.herokuapp.com/my_response.txt';

$log = fopen($logfile, "a+");

fwrite($log, $mpesaResponse);
fclose ($log);
echo $mpesaResponse;
?>
