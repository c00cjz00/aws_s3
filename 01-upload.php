<?php
// Include the SDK using the composer autoloader
require '00-configure.php';
define('myBucket', 'cjz');
define('remoteFile', 'helloUpload.txt');
define('localFile', 'hello.txt');

$client->putObject(array(
    'Bucket' => myBucket,
    'Key'    => remoteFile,
    'SourceFile' => localFile
));
