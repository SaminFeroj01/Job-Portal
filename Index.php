<?php include("php/session_check.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Job Portal</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/validation.js" defer></script>
</head>
<body>
  <header>
    <h1>Job Portal</h1>
    <nav>
      <a href="dashboard.php">Dashboard</a>
      <a href="jobs.php">Jobs</a>
      <a href="companies.php">Companies</a>
      <a href="resume.php">Resume</a>
      <a href="salary.php">Salary</a>
      <a href="logout.php">Logout</a>
    </nav>
  </header>
  <section class="hero">
    <h2>Find Your Dream Job</h2>
    <p>Browse thousands of jobs and apply in seconds</p>
    <div class="hero-buttons">
      <a href="signup.php" class="btn primary">Sign Up</a>
      <a href="login.php" class="btn secondary">Login</a>
    </div>
  </section>
</body>
</html>