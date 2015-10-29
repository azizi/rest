<?php

// Get cURL resource
$curl = curl_init();

// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://localhost/laravel-api-starter/public/api/birds?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbG9jYWxob3N0L2xhcmF2ZWwtYXBpLXN0YXJ0ZXIvcHVibGljL2FwaS9sb2dpbiIsImlhdCI6MTQ0NjAxNjI4NiwiZXhwIjoxNDQ2MDE5ODg2LCJuYmYiOjE0NDYwMTYyODYsImp0aSI6ImY5MTQxYTRiOTVhYzIyMDc1NDZlY2ZhMzk3NGQ3ZGY4Iiwic3ViIjoxfQ.eXPVVQCgoC_XbgARKQGSlFMx3BHRoWKxCPamYnQMbvE',
    CURLOPT_USERAGENT => 'Sample cURL Request',
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => array(
        'name' => 'Helang',
        'age' => '5'
    )
));

// Send the request & save response to $resp
$response = curl_exec($curl);

$result = json_decode($response);

if ($result->bird) {
    echo 'New bird added!';
}

// Close request to clear up some resources
curl_close($curl);
?>
