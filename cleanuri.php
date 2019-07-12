<?php
header('Content-Type: application/json');

$content = file_get_contents("php://input");

$content = json_decode($content);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://cleanuri.com/api/v1/shorten",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
));

curl_setopt($curl,CURLOPT_POSTFIELDS,array(
  "url" => isset($content->url) ? $content->url : ''
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}