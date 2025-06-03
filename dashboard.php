<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: admin_login.php");
    exit;
}

$conn = new mysqli("localhost", "root", "YOUR_PASSWORD", "contact_form");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$result = $conn->query("SELECT name, email, message FROM submissions");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="form-container">
    <h1>Submissions</h1>
    <table border="1" cellpadding="10" style="width: 100%;">
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
      </tr>
      <?php while($row = $result->fetch_assoc()): ?>
      <tr>
        <td><?= htmlspecialchars($row['name']) ?></td>
        <td><?= htmlspecialchars($row['email']) ?></td>
        <td><?= htmlspecialchars($row['message']) ?></td>
      </tr>
      <?php endwhile; ?>
    </table>
    <br>
    <button onclick="location.href='logout.php'" class="admin-button">Logout</button>
  </div>
</body>
</html>
