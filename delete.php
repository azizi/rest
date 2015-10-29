<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://localhost/laravel-api-starter/public/api/birds/3",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "DELETE",
  CURLOPT_HTTPHEADER => array(
    "authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbG9jYWxob3N0L2xhcmF2ZWwtYXBpLXN0YXJ0ZXIvcHVibGljL2FwaS9sb2dpbiIsImlhdCI6MTQ0NjAxODYwOCwiZXhwIjoxNDQ2MDIyMjA4LCJuYmYiOjE0NDYwMTg2MDgsImp0aSI6IjI3Y2E0Y2ExOWE2MWNlZTQ2Njk3MWU5MGJlY2JjNjNmIiwic3ViIjoxfQ.EoSrl1UKHnO-5cAOmcHPX34Ai4imxhizTqgMzkNiyWk",
    "cache-control: no-cache",
    "postman-token: cdd04f99-425d-07dc-9aca-c0f511dbc330"
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