
<?php
/*
$url='https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
$ch = curl_init();
curl_setopt($ch , CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER,  ['Authorization: Basic '.base64_encode('5YtmNHkYNuLxAk8uZxBtLXp10jmGHdXy:EkM9Du6CJHkwtkgy')]);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);

if($e =curl_error($ch)){

    echo $e;
}
else
{
    $json = json_decode($response,1);
    print_r($json);
    echo $response."<br>";
    $access_token=$json['access_token'];
    echo $access_token;

    



}
curl_close($ch);
*/


$url='https://sandbox.safaricom.co.ke/mpesa/c2b/v1/registerurl';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
//$headers =['Authorization: Bearer '.$access_token,'Content-Type: application/json'];
//$headers =['Content-Type: application/json','Authorization: Bearer '.$access_token];


curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer wxEMGG9npX3A8QcbJRYQqVWST8qn',
    'Content-Type: application/json'
]);

//curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POST, 1);
$confirmation_url='https://laminca-c2b.herokuapp.com/confirmation_url.php';
$validation_url='https://laminca-c2b.herokuapp.com/validation.php';
//"ShortCode"=>600426
$reg_data=json_encode(array(
    "ShortCode"=>600426,
    "ResponseType"=>"Confirmed",
    "ConfirmationURL"=>$confirmation_url,
    "ValidationURL"=>$validation_url

));
curl_setopt($ch, CURLOPT_POSTFIELDS,$reg_data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response= curl_exec($ch);
curl_close($ch);
echo $response;









?>
