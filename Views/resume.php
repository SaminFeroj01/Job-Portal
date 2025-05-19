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
  <title>Upload Resume - Job Portal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body class="bg-light">

  <!-- Header -->
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

  <!-- Main Content -->
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card shadow-sm">
          <div class="card-body">
            <h4 class="card-title mb-4">Upload Your Resume</h4>

            <?php if (isset($_SESSION['upload_message'])): ?>
              <div class="alert alert-info">
                <?= htmlspecialchars($_SESSION['upload_message']) ?>
              </div>
              <?php unset($_SESSION['upload_message']); ?>
            <?php endif; ?>

            <form action="../Controllers/ResumeUploadController.php" method="POST" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="resume" class="form-label">Select your resume (PDF or DOCX):</label>
                <input type="file" name="resume" id="resume" class="form-control" accept=".pdf,.doc,.docx" required>
              </div>
              <button type="submit" class="btn btn-primary">Upload Resume</button>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
