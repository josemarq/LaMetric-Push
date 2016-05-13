<?php
 
$url = "https://developer.lametric.com/api/v1/dev/widget/update/com.lametric.[YOUR APP ID FROM LAMETRIC SITE]";

$frames = array(
 "frames" => array(
 array(
 'index' => 0,
 'text' => "Ok!",
'icon' => "i649"
 		)
 	)
);

$curl = curl_init();

$headers = array(
"Accept: application/json",
"X-Access-Token: [YOUR ACCESS TOKEN FROM LAMETRIC SITE]",
"Cache-Control: no-cache",
);

$codificado = json_encode($frames);


curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $codificado);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
$response = curl_exec($curl);

if ($response === false)
{
    // throw new Exception('Curl error: ' . curl_error($curl));
    print_r('Curl error: ' . curl_error($curl));
}

curl_close($curl);
print_r($response)

?>
