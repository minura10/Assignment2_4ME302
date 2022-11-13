<?php

require_once("../config.php");

session_start();

$authUrl = $facebookProvider->getAuthorizationUrl([
    'scope' => ['email'],
]);
$_SESSION['oauth2state'] = $facebookProvider->getState();
header('Location: ' . $authUrl);
exit;
