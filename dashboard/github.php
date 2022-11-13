<?php

require_once("../config.php");

session_start();

$authUrl = $githubProvider->getAuthorizationUrl();
$_SESSION['oauth2state'] = $githubProvider->getState();
header('Location: ' . $authUrl);
exit;

?>