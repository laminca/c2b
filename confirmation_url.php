<?php

header("Content-Type: application/json");

$response = '{
    "ResultCode": 563,
    "ResultDesc":"Confirmstion Received Successfully"

}';
//Data
$mpesaResponse = file_get_contents('php://input');

$logfile="mpesa_response.txt";

$json = json_decode($mpesaResponse,true);

$log = fopen($logfile, "a");
fwrite($log, $mpesaResponse);
fclose ($log);
echo $response;
?>
