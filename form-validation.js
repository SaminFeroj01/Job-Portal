// form-validation.js

// Validate Login Form
function validateLoginForm() {
    const email = document.getElementById("login-email").value.trim();
    const password = document.getElementById("login-password").value.trim();
  
    if (email === "" || password === "") {
      alert("Please fill in all login fields.");
      return false;
    }
  
    // Simple email format check
    const emailRegex = /\S+@\S+\.\S+/;
    if (!emailRegex.test(email)) {
      alert("Please enter a valid email.");
      return false;
    }
  
    return true;
  }
  
  // Validate Signup Form
  function validateSignupForm() {
    const name = document.getElementById("signup-name").value.trim();
    const email = document.getElementById("signup-email").value.trim();
    const password = document.getElementById("signup-password").value.trim();
    const confirmPassword = document.getElementById("signup-confirm-password").value.trim();
  
    if (name === "" || email === "" || password === "" || confirmPassword === "") {
      alert("Please fill in all signup fields.");
      return false;
    }
  
    const emailRegex = /\S+@\S+\.\S+/;
    if (!emailRegex.test(email)) {
      alert("Please enter a valid email.");
      return false;
    }
  
    if (password !== confirmPassword) {
      alert("Passwords do not match.");
      return false;
    }
  
    return true;
  }
  