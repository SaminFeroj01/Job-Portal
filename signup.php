<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/validation.js" defer></script>
</head>
<body>
  <div class="form-container">
    <h2>Sign Up</h2>
    <form action="php/signup_process.php" method="POST" onsubmit="return validateSignupForm()">
      <label>Username</label>
      <input type="text" name="username" required>

      <label>Email</label>
      <input type="email" name="email" required>

      <label>Password</label>
      <input type="password" name="password" required>

      <button type="submit">Sign Up</button>
    </form>
  </div>
</body>
</html>