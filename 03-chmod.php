<?php
// Include the SDK using the composer autoloader
require '00-configure.php';
define('myBucket', 'cjz');
define('remoteFile01', 'hello.txt');
define('remoteFile02', 'secret_plans.txt');

$client->putObjectAcl(array(
    'Bucket' => myBucket,
    'Key'    => remoteFile01,
    'ACL'    => 'public-read'
));
$client->putObjectAcl(array(
    'Bucket' => myBucket,
    'Key'    => remoteFile02,
    'ACL'    => 'private'
));

