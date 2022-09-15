<?php

header("Content-Type: application/json");

$response = '{
    "ResultCode": 0,
    "ResultDesc":"Confirmation Received Successfully"

}';
//Data
$mpesaResponse = file_get_contents('php://input');


$logfile='my_response.txt';

$log = fopen($logfile, "a+");

fwrite($log, "im working");
fclose ($log);
echo $mpesaResponse;
?>
