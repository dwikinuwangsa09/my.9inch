<?php

require_once '../vendor/autoload.php';

session_start();

// init configuration
$clientID = '1089634697014-qn74nthln8ev5fbfb33o7223kqv33s69.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'https://my.9inch.broadcast/dashboard.php';

// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");

// Connect to database
$hostname = "localhost";
$username = "dxklgwhp_datasembilan";
$password = "9InchBroadcast";
$database = "dxklgwhp_datasembilan";

$conn = mysqli_connect($hostname, $username, $password, $database);