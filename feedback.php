ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Access the submitted form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Process the form data (e.g., save to a database or send via email)
  // Your code to handle the form data goes here

  // Send a response back to the JavaScript code
  echo "Thank you for your feedback!";
}
?>
