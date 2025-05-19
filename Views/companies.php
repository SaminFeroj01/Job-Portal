<?php
session_start();

// Redirect to login if user not logged in
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Company Profiles</title>
  <link rel="stylesheet" href="../styles/styles.css">
</head>

<body class="custom-bg">
  <header class="custom-header">
    <div class="header-container">
      <h1 class="site-title">Job Portal</h1>
      <nav class="nav-links">
        <a href="home2.php">Home</a>
            <a href="jobs.php">Jobs</a>
            <a href="companies.php">Companies</a>
            <a href="resume.php">Upload Resume</a>
            <a href="salary.php">Salary Insights</a>
            <a href="application.php">Application Tracking</a>
            <a href="../Controllers/LogoutController.php">Logout</a>
      </nav>
    </div>
  </header>
  <main class="main-container">
    <section class="card form-container">
      <h2>Company Profiles</h2>
      <?php foreach ($companies as $company): ?>
        <div class="company">
          <h3><?php echo htmlspecialchars($company['name']); ?></h3>
          <p><strong>Culture:</strong> <?php echo htmlspecialchars($company['culture']); ?></p>
          <p><strong>Reviews:</strong> "<?php echo htmlspecialchars($company['reviews']); ?>"</p>
          <p><strong>Open Roles:</strong> <?php echo htmlspecialchars($company['open_roles']); ?></p>
        </div>
      <?php endforeach; ?>
    </section>
  </main>
  <footer>
    <div class="container">&copy; 2025 Job Portal</div>
  </footer>
</body>

</html>