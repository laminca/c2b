<?php

if($_POST['authenticate']=='Authenticate'){
    
    tuma();

}
else{

    echo "Error processing";
}

function tuma(){
    
$url='https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
$ch = curl_init();
curl_setopt($ch , CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER,  ['Authorization: Basic ' . base64_encode('5YtmNHkYNuLxAk8uZxBtLXp10jmGHdXy:EkM9Du6CJHkwtkgy')]);
//['Authorization: Bearer cFJZcjZ6anEwaThMMXp6d1FETUxwWkIzeVBDa2hNc2M6UmYyMkJmWm9nMHFRR2xWOQ==']
//['Authorization: Bearer cFJZcjZ6anEwaThMMXp6d1FETUxwWkIzeVBDa2hNc2M6UmYyMkJmWm9nMHFRR2xWOQ==']
// ['Authorization: Basic ' . base64_encode('cXlVra0UqXuhKGtAZONqjVbOLhvtyIHn:3GEVyIhsgby98r1w')]
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
    echo $json['access_token'];

    



}

curl_close($ch);

}


?>

