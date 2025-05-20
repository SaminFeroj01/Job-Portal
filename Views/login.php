<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - Job Portal</title>
  <link rel="stylesheet" href="../styles/styles.css">
</head>

<body class="custom-bg">
  <header class="custom-header">
    <div class="header-container">
      <h1 class="site-title">Job Portal</h1>
      <nav class="nav-links">
        <a href="home.php" class="nav-btn">Home</a>
        <a href="signup.php" class="nav-btn">Sign Up</a>
      </nav>
    </div>
  </header>
  <main class="main-container">
    <section class="card form-container">
      <h2>Login</h2>
      
        <?php
        session_start();
        if (isset($_SESSION['error'])) {
          ?>
          <p class="error-message">
          <?php
          echo $_SESSION['error'];
          ?>
          </p>
          <?php
          unset($_SESSION['error']);
        }
        ?>

        <?php
        if (isset($_SESSION['success'])) {
          ?>
          <p class="success-message">
          <?php
          echo $_SESSION['success'];
          ?>
          </p>
          <?php
          unset($_SESSION['success']);
        }
        ?>
 
      
      <form action="../Controllers/LoginController.php" method="POST" onsubmit="return validateLoginForm()">
        <label for="login-email">Email</label>
        <input type="email" id="login-email" name="email" placeholder="Enter your email" required>
        <label for="login-password">Password</label>
        <input type="password" id="login-password" name="password" placeholder="Enter your password" required>
        <button type="submit" class="primary-btn" name="login">Login</button>
        <button type="button" class="primary-btn" style="background:#f0ad4e;" onclick="document.getElementById('reset-password').style.display='block'">Forgot Password?</button>
        <div id="reset-password" style="display:none;">
          <label for="reset-email">Reset Email</label>
          <input type="email" id="reset-email" name="reset_email" placeholder="Enter your email to reset password">
           <button type="button" class="primary-btn" id="resetBtn">Send Reset Link</button>

  <script>
    document.getElementById('resetBtn').addEventListener('click', function () {
      alert('Send in your email');
    });
  </script>
        </div>
      </form>
    </section>
  </main>
  <footer>
    <p>&copy; 2025 Job Portal</p>
  </footer>
</body>

</html>