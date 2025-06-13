<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: index.php');
    exit;
}

$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container py-4">
    <h1>Welcome, <?php echo htmlspecialchars($user['name']); ?>!</h1>
    <p><a href="logout.php">Logout</a></p>

    <h2>New Booking</h2>
    <ul>
        <li><a href="form_room.php">Book Meeting Room</a></li>
        <li><a href="form_car.php">Book Company Car</a></li>
        <li><a href="form_zoom.php">Book Zoom Account</a></li>
    </ul>
</body>
</html>
