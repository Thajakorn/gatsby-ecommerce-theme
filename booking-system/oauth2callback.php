<?php
require __DIR__ . '/vendor/autoload.php';
$config = require __DIR__ . '/config.php';

session_start();

$client = new Google_Client();
$client->setClientId($config['google']['client_id']);
$client->setClientSecret($config['google']['client_secret']);
$client->setRedirectUri($config['google']['redirect_uri']);
$client->addScope('email');
$client->addScope('profile');

if (!isset($_GET['code'])) {
    header('Location: index.php');
    exit;
}

$token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
if (isset($token['error'])) {
    die('Error fetching OAuth token');
}
$client->setAccessToken($token);
$oauth = new Google_Service_Oauth2($client);
$userInfo = $oauth->userinfo->get();

$email = $userInfo->email;
if (substr($email, -strlen('@' . $config['google']['allowed_domain'])) !== '@' . $config['google']['allowed_domain']) {
    die('Access denied: invalid domain');
}

$_SESSION['user'] = [
    'email' => $email,
    'name' => $userInfo->name
];

header('Location: dashboard.php');
