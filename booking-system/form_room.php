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
<title>Book Meeting Room</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container py-4">
<h1>Book Meeting Room</h1>
<form method="post" action="submit_room.php">
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
    <label class="form-label">Room</label>
    <select name="room" class="form-select">
      <option value="1">Room 1</option>
      <option value="2">Room 2</option>
      <option value="3">Room 3</option>
    </select>
  </div>
  <div class="mb-3">
    <label class="form-label">Title</label>
    <input type="text" name="title" class="form-control" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Description</label>
    <textarea name="details" class="form-control" required></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
