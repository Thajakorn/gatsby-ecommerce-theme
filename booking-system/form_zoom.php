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
<title>Book Zoom Account</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container py-4">
<h1>Book Zoom Account</h1>
<form method="post" action="submit_zoom.php">
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
    <label class="form-label">Account</label>
    <select name="account" class="form-select">
      <option value="PLC">Chewathai PLC</option>
      <option value="IT">IT Chewathai</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
