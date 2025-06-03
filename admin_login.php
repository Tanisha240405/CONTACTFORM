<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $admin_user = "admin";
    $admin_pass = "admin123";

    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $admin_user && $password === $admin_pass) {
        $_SESSION["loggedin"] = true;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Invalid credentials";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Admin Login</title>
  <style>
    body {
      background: linear-gradient(135deg,rgb(6, 32, 71),rgb(148, 185, 240));
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      color: #0047b3;
    }

    .login-box {
      background: white;
      padding: 30px 40px;
      border-radius: 10px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
      text-align: center;
      width: 320px;
    }

    .login-box h2 {
      margin-bottom: 20px;
      color: #1a75ff;
      font-weight: 700;
    }

    .login-box input[type="text"],
    .login-box input[type="password"] {
      width: 100%;
      padding: 10px;
      margin: 10px 0 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 1em;
      box-sizing: border-box;
    }

    .login-box input[type="submit"] {
      background-color: #1a75ff;
      color: white;
      border: none;
      padding: 12px 20px;
      width: 100%;
      border-radius: 5px;
      cursor: pointer;
      font-weight: 700;
      font-size: 1em;
      transition: background-color 0.3s ease;
    }

    .login-box input[type="submit"]:hover {
      background-color: #0047b3;
    }

    .error {
      color: #d93025;
      font-size: 0.9em;
      margin-top: 10px;
      font-weight: 600;
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h2>Admin Login</h2>
    <form method="post" action="">
      <input type="text" name="username" placeholder="Username" required autofocus />
      <input type="password" name="password" placeholder="Password" required />
      <input type="submit" value="Login" />
      <?php if (isset($error)) echo "<div class='error'>$error</div>"; ?>
    </form>
  </div>
</body>
</html>
