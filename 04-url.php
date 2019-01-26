<?php
// Include the SDK using the composer autoloader
require '00-configure.php';
define('myBucket', 'cjz');
define('remoteFile01', 'hello.txt');
define('remoteFile02', 'secret_plans.txt');
define('requestTime', '+1 hour');


$plain_url = $client->getObjectUrl(myBucket, remoteFile01);
echo $plain_url . "\n";

$cmd = $client->getCommand('GetObject', [
        'Bucket' => myBucket,
        'Key'    => remoteFile02
]);
$signed_url = $client->createPresignedRequest($cmd, requestTime);
echo $signed_url->getUri() . "\n";