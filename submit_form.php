<?php
$servername = "localhost";
$username = "root";
$password = "YOUR_PASSWORD";
$dbname = "contact_form";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$stmt = $conn->prepare("INSERT INTO submissions (name, email, message) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $message);
$stmt->execute();

$stmt->close();
$conn->close();

header("Location: thankyou.html");
exit;
?>
