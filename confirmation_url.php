<?php

header("Content-Type: application/json");

$response = '{
    "ResultCode": 0,
    "ResultDesc":"Confirmation Received Successfully"

}';
//Data
$mpesaResponse = file_get_contents('php://input');
$url='https://webhook.site/ca8f670e-11e1-4b1a-9148-59f7e2518765/';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
//curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);



curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0);
curl_setopt($ch,CURLOPT_POST,true);
curl_setopt($ch, CURLOPT_POSTFIELDS,$mpesaResponse);
$response= curl_exec($ch);

if($e =curl_error($ch)){

    echo $e;
}



$logfile="mpesa_response.txt";

$json = json_decode($mpesaResponse,true);

$log = fopen($logfile, "a");
fwrite($log, $mpesaResponse);
fclose ($log);
echo $response;
?>
