<?php
define('AWS_KEY', '');
define('AWS_SECRET_KEY', '');
define('HOST', 'http://s3-cloud.nchc.org.tw');
define('REGION', 's3-cloud.nchc.org.tw');

// require the AWS SDK for PHP library
require 'vendor/autoload.php';

use Aws\S3\S3Client;

// Establish connection with DreamObjects with an S3 client.
$client = new Aws\S3\S3Client([
    'version'     => '2006-03-01',
    'region'      => REGION,
    'endpoint'    => HOST,
        'credentials' => [
        'key'      => AWS_KEY,
        'secret'   => AWS_SECRET_KEY,
    ]
]);

