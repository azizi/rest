<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://localhost/laravel-api-starter/public/api/birds/2",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "PUT",
  CURLOPT_POSTFIELDS => "name=birds%202&age=1",
  CURLOPT_HTTPHEADER => array(
    "authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbG9jYWxob3N0L2xhcmF2ZWwtYXBpLXN0YXJ0ZXIvcHVibGljL2FwaS9sb2dpbiIsImlhdCI6MTQ0NjAxOTcxMiwiZXhwIjoxNDQ2MDIzMzEyLCJuYmYiOjE0NDYwMTk3MTIsImp0aSI6ImRjNDNlOTU4ZjRkMWNlN2ZjYzMzYTA3YmQ0OTFjNTlhIiwic3ViIjoxfQ.cS7Ca8LNE2cI-7QbnEZvE_KK2y040g12lvp-2_ZUfwQ",
    "cache-control: no-cache",
    "content-type: application/x-www-form-urlencoded",
    "postman-token: bdbc03b0-e9d3-2bad-52aa-0d10139ea57c"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}