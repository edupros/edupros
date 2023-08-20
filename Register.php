<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "edupros";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Insert user data into the database
  $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
  if (mysqli_query($conn, $sql)) {
    echo "Registration successful.";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
}
?>