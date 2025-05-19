<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign Up - Job Portal</title>
  <link rel="stylesheet" href="../styles/styles.css">
</head>

<body class="custom-bg">

  <header class="custom-header">
    <div class="header-container">
      <h1 class="site-title">Job Portal</h1>
      <nav class="nav-links">
        <a href="home.php" class="nav-btn">Home</a>
        <a href="login.php" class="nav-btn">Login</a>
      </nav>
    </div>
  </header>

  <main class="main-container">
    <section class="card form-container">
      <h2>Sign Up</h2>
      <form action="../Controllers/SignupController.php" method="POST" onsubmit="return validateSignupForm()">
        <label for="signup-name">Full Name</label>
        <input type="text" id="signup-name" name="name" placeholder="Enter your full name" required>

        <label for="signup-email">Email</label>
        <input type="email" id="signup-email" name="email" placeholder="Enter your email" required>

        <label for="signup-password">Password</label>
        <input type="password" id="signup-password" name="password" placeholder="Enter a password" required>

        <label for="signup-confirm-password">Confirm Password</label>
        <input type="password" id="signup-confirm-password" name="confirm_password" placeholder="Confirm your password" required>

        <button type="submit" class="primary-btn">Create Account</button>
      </form>
    </section>
  </main>

  <footer>
    <p>&copy; 2025 Job Portal</p>
  </footer>

</body>

</html>