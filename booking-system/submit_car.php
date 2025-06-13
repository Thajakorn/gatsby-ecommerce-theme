<?php
require __DIR__ . '/vendor/autoload.php';
$config = require __DIR__ . '/config.php';

session_start();
if (!isset($_SESSION['user'])) {
    header('Location: index.php');
    exit;
}

try {
    $pdo = new PDO('mysql:host='.$config['db']['host'].';dbname='.$config['db']['name'], $config['db']['user'], $config['db']['pass']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare('INSERT INTO bookings (resource_id, user_id, start_time, end_time, details) VALUES (?, ?, ?, ?, ?)');
    $resourceId = 4; // car id placeholder
    $userId = 1; // placeholder
    $start = $_POST['date'] . ' ' . $_POST['start'] . ':00';
    $end = $_POST['date'] . ' ' . $_POST['end'] . ':00';
    $details = $_POST['purpose'] . ', ' . $_POST['destination'] . ', passengers:' . $_POST['passengers'];
    $stmt->execute([$resourceId, $userId, $start, $end, $details]);
    echo 'Car booking saved (pending approval).';
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
