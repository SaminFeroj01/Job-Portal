function validateLoginForm() {
  const username = document.querySelector("input[name='username']").value;
  const password = document.querySelector("input[name='password']").value;
  if (!username || !password) {
    alert("Please fill in both fields.");
    return false;
  }
  return true;
}

function validateSignupForm() {
  const username = document.querySelector("input[name='username']").value;
  const email = document.querySelector("input[name='email']").value;
  const password = document.querySelector("input[name='password']").value;
  if (!username || !email || !password) {
    alert("All fields are required.");
    return false;
  }
  return true;
}
