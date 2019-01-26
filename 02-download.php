<?php
// Include the SDK using the composer autoloader
require '00-configure.php';
define('myBucket', 'cjz');
define('remoteFile', 'hello.txt');
define('localFile', 'helloDownload.txt');

$client->getObject(array(
    'Bucket' => myBucket,
    'Key'    => remoteFile,
    'SaveAs' => localFile
));