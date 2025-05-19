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
  <title>Application Tracking</title>
  <link rel="stylesheet" href="../styles/styles.css">
</head>

<body>

  <header>
    <h1>Job Portal</h1>
    <nav>
            <a href="home2.php">Home</a>
            <a href="jobs.php">Jobs</a>
            <a href="companies.php">Companies</a>
            <a href="resume.php">Upload Resume</a>
            <a href="salary.php">Salary Insights</a>
            <a href="application.php">Application Tracking</a>
            <a href="../Controllers/LogoutController.php">Logout</a>
    </nav>
  </header>

  <div class="form-container">
    <h2>Application Tracking</h2>

    <h3>Status Board</h3>
    <ul>
      <li>Frontend Developer - <strong>Reviewed</strong></li>
      <li>Backend Engineer - <strong>Pending</strong></li>
      <li>UX Designer - <strong>Interview Scheduled</strong></li>
    </ul>

    <h3>Employer Actions Log</h3>
    <ul>
      <li>Techify Inc reviewed your application</li>
      <li>DataCore viewed your resume</li>
    </ul>

    <h3>Follow-Up Reminders</h3>
    <label>Set Reminder:</label>
    <input type="date" />
    <button class="btn primary">Set Reminder</button>
  </div>
</body>

</html>