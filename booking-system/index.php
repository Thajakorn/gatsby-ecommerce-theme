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

if (!isset($_SESSION['user'])) {
    $authUrl = $client->createAuthUrl();
    echo '<h1>Booking System</h1>';
    echo '<a href="' . htmlspecialchars($authUrl) . '">Login with Google</a>';
    echo '<p>Set Google OAuth redirect URI to: <code>' . htmlspecialchars($config['google']['redirect_uri']) . '</code></p>';
    exit;
}

header('Location: dashboard.php');
