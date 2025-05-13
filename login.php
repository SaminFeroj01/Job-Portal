<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/validation.js" defer></script>
</head>
<body>
  <div class="form-container">
    <h2>Login</h2>
    <form action="php/login_process.php" method="POST" onsubmit="return validateLoginForm()">
      <label>Username</label>
      <input type="text" name="username" required>

      <label>Password</label>
      <input type="password" name="password" required>

      <button type="submit">Login</button>
    </form>
  </div>
</body>
</html>