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
  <title>Salary Insights - Job Portal</title>
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
    <h2 class="mb-4">💰 Salary Insights</h2>

    <!-- Compensation Estimator -->
    <div class="card mb-4">
      <div class="card-body">
        <h4 class="card-title">Compensation Estimator</h4>
        <form>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="position" class="form-label">Position</label>
              <input type="text" id="position" class="form-control" placeholder="e.g. Software Engineer">
            </div>
            <div class="col-md-6 mb-3">
              <label for="location" class="form-label">Location</label>
              <input type="text" id="location" class="form-control" placeholder="e.g. New York">
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Estimate Salary</button>
        </form>
      </div>
    </div>

    <!-- Role Comparison Tool -->
    <div class="card mb-4">
      <div class="card-body">
        <h4 class="card-title">Role Comparison Tool</h4>
        <form>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="offer1" class="form-label">Offer 1 (Annual)</label>
              <input type="number" class="form-control" id="offer1" placeholder="$">
            </div>
            <div class="col-md-6 mb-3">
              <label for="offer2" class="form-label">Offer 2 (Annual)</label>
              <input type="number" class="form-control" id="offer2" placeholder="$">
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Compare Offers</button>
        </form>
      </div>
    </div>

    <!-- Benefits Breakdown -->
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Benefits Breakdown</h4>
        <p class="mb-2">Compare additional benefits like health, vacation, bonuses, and more:</p>
        <ul class="list-group">
          <li class="list-group-item">Health Insurance: Included</li>
          <li class="list-group-item">Annual Bonus: 10%</li>
          <li class="list-group-item">Paid Vacation: 20 days</li>
          <li class="list-group-item">Remote Work Option: Available</li>
        </ul>
      </div>
    </div>
  </div>

</body>
</html>
