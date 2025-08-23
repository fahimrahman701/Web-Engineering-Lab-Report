// Array to store user data as objects
let users = [];

// Function to validate name
function validateName(name) {
  return name.trim() !== "";
}

// Function to validate email
function validateEmail(email) {
  let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
  return pattern.test(email);
}

// Function to validate password (min 6 chars)
function validatePassword(password) {
  return password.length >= 6;
}

// Form submission handling
document.getElementById("userForm").addEventListener("submit", function(event) {
  event.preventDefault(); // prevent page reload

  let name = document.getElementById("name").value;
  let email = document.getElementById("email").value;
  let password = document.getElementById("password").value;
  let message = document.getElementById("message");

  if (!validateName(name)) {
    message.textContent = "Name cannot be empty.";
    message.className = "error";
  } else if (!validateEmail(email)) {
    message.textContent = "Invalid email format.";
    message.className = "error";
  } else if (!validatePassword(password)) {
    message.textContent = "Password must be at least 6 characters.";
    message.className = "error";
  } else {
    // Store data in array as an object
    users.push({ name, email, password });
    message.textContent = "Form submitted successfully!";
    message.className = "success";

    // Clear inputs
    document.getElementById("userForm").reset();

    console.log("Users Array:", users);
  }
});// ...existing code...

// Example: Improved script.js structure

// Wait for the DOM to load before running scripts
document.addEventListener('DOMContentLoaded', () => {
    // Cache DOM elements
    const button = document.getElementById('myButton');
    const output = document.getElementById('output');

    // Utility function to display messages
    const showMessage = (message) => {
        output.textContent = message;
    };

    // Event handler for button click
    button.addEventListener('click', () => {
        // Example logic: show a message
        showMessage('Button was clicked!');
    });

    // Add more event listeners or logic as needed
});