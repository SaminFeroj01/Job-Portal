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
    <title>Job Portal</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>


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

    <section class="hero">
        <h2>Find Your Dream Job</h2>
        <p>Connect with top companies and grow your career</p>
        <p>Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?>!</p>
        <div class="hero-buttons">
            <a href="/signup" class="btn primary">Get Started</a>
            <a href="/jobs" class="btn secondary">Browse Jobs</a>
        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2025 Job Portal. All rights reserved.</p>
    </footer>

</body>

</html>