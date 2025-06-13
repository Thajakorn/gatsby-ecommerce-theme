<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Book Company Car</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container py-4">
<h1>Book Company Car</h1>
<form method="post" action="submit_car.php">
  <div class="mb-3">
    <label class="form-label">Date</label>
    <input type="date" name="date" class="form-control" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Start Time</label>
    <input type="time" name="start" class="form-control" required>
  </div>
  <div class="mb-3">
    <label class="form-label">End Time</label>
    <input type="time" name="end" class="form-control" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Purpose</label>
    <input type="text" name="purpose" class="form-control" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Destination</label>
    <input type="text" name="destination" class="form-control" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Passengers</label>
    <input type="number" name="passengers" class="form-control" required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
