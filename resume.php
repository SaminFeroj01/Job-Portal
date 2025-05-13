<?php include("php/session_check.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Upload Resume</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <div class="form-container">
    <h2>Upload Your Resume</h2>
    <form action="#" method="POST" enctype="multipart/form-data">
      <label for="resume">Choose PDF File</label>
      <input type="file" name="resume" accept=".pdf" required>
      <button type="submit">Upload</button>
    </form>
  </div>
</body>
</html>
