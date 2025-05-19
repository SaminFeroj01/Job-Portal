<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Job Listings</title>
  <link rel="stylesheet" href="../styles/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body class="custom-bg">
  <header class="custom-header">
    <div class="header-container">
      <h1 class="site-title">Job Portal</h1>
      <nav class="nav-links">
        <a href="home.php" class="nav-btn">Home</a>
        <a href="jobs.php" class="nav-btn">Jobs</a>
        <a href="companies.php" class="nav-btn">Companies</a>
        <a href="resume.php" class="nav-btn">Upload Resume</a>
        <a href="salary.php" class="nav-btn">Salary</a>
      </nav>
    </div>
  </header>
  <main class="main-container">
    <section class="card">
      <h2>Search Job Listings</h2>
      <div class="job-search" style="margin-bottom:20px; display:flex; flex-wrap:wrap; gap:10px;">
        <input type="text" placeholder="Job title or keywords" class="date-input" style="flex:1; min-width:150px;" />
        <input type="text" placeholder="Location" class="date-input" style="flex:1; min-width:120px;" />
        <select class="date-input" style="flex:1; min-width:100px;">
          <option value="">Job Type</option>
          <option>Full Time</option>
          <option>Part Time</option>
          <option>Internship</option>
        </select>
        <button class="primary-btn">Search</button>
      </div>

    </section>
  </main>
  <footer>
    <div class="container">&copy; 2025 Job Portal</div>
  </footer>
</body>

</html>