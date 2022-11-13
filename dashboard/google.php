
<?php
require_once("../config.php");

session_start();

$authUrl = $googleProvider->getAuthorizationUrl();
$_SESSION['oauth2state'] = $googleProvider->getState();
header('Location: ' . $authUrl);
exit;
?>