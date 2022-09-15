<?php

header("Content-Type: application/json");

$response = '{
    "ResultCode": 0,
    "ResultDesc":"Confirmation Received Successfully"

}';
//Data
$mpesaResponse = file_get_contents('php://input');

if($e =curl_error($ch)){

    echo $e;
}



$logfile="mpesa_response.txt";

$json = json_decode($mpesaResponse,true);

$log = fopen("mpesa_response.txt", "a");
fwrite($log, $mpesaResponse);
fclose ($log);
echo $response;
?>
