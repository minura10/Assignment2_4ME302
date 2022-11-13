<?php

require_once 'vendor/autoload.php';

use League\OAuth2\Client\Provider\Google;
use League\OAuth2\Client\Provider\Facebook;
use League\OAuth2\Client\Provider\Github;

$googleProvider = new Google([
    'clientId'     => '968452185086-jtfshf9g6mqd6sh8jetbhlocd8kamp0n.apps.googleusercontent.com',
    'clientSecret' => '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',
    'redirectUri'  => 'http://localhost/Assignment2/patient/patient.php',
]);

$githubProvider = new Github([
    'clientId'          => 'Iv1.faad72ee43295343',
    'clientSecret'      => '4b5cbced371db16fd393bdea70fec52e765ab3c2',
    'redirectUri'       => 'http://localhost/Assignment2/researchers/newsfeeder.php',
]);

$facebookProvider = new Facebook([
    'clientId'          => '2780770802054729',
    'clientSecret'      => '8efdd0ce1198fdfa51ec501bb3272a26',
    'redirectUri'       => 'http://localhost/Assignment2/physician/physian.php',
    'graphApiVersion'   => 'v2.10',
]);

/**
 * Database Config
 */
$db = array(
    "dbname" => "GreenEarth",
    "username" => "root",
    "password" => "",
    "host" => "127.0.0.1",
    "port" => "3306"
);

/**
 * Paths and URLs
 * Path is used for php imports and URLs are used in html
 */
define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));
define("BACKEND_URL", './backend');
define("BACKEND_PATH", realpath(dirname(__FILE__) . '/backend'));

/**
 * Error Reporting
 */
 
?>
