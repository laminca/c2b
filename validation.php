<?php

header("Content-Type: application/json");

$response = '{
    "ResultCode": 0,
    "ResultDesc":"Confirmstion Received Successfully"

}';
//Data
$mpesaResponse = file_get_contents('php://input');

$logfile="/laminca-c2b.herokuapp.com/my_response.txt";
..https://laminca-c2b.herokuapp.com/my_response.txt
$json = json_decode($mpesaResponse,true);

$log = fopen($logfile, "a");
fwrite($log, "im working");
fclose ($log);
file_put_contents($logfile,file_get_contents('php://input'));

?>
