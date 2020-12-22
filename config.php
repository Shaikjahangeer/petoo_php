<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('34127799715-8gubq85e9gmo08aqldr13p3vcqiptd9g.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('JR3UHE-lKj9dK5ojOhhhDL6d');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/petoo_Assignment/peto_index.php');


// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?> 