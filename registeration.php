<?php
$servername = "localhost";  // Your MySQL server
$username = "root";         // Your MySQL username
$password = "";             // Your MySQL password
$dbname = "rems";           // Your database name

// Create connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $first_name = $conn->real_escape_string($_POST['firstname']);
    $last_name = $conn->real_escape_string($_POST['lastname']);
    $country = $conn->real_escape_string($_POST['country']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $password = $conn->real_escape_string($_POST['text']);
    $date = $conn->real_escape_string($_POST['date']);
    $agreed = isset($_POST['agree']) ? 1 : 0;

    $sql = "INSERT INTO user (firstname, lastname, country, email, phone, `password`, `date`, agreed)
    VALUES ('$first_name', '$last_name', '$country', '$email', '$phone', '$password', '$date', '$agreed')";

if ($conn->query($sql) === TRUE) {
echo "Registration successful!";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
}