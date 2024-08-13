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


$username = $conn->real_escape_string($_POST['username']);
$password = $conn->real_escape_string($_POST['password']);

// Query to fetch the user based on the username or email
$sql = "SELECT * FROM user WHERE (firstname = '$username' OR email = '$username') AND `password`='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch the user data
    $user = $result->fetch_assoc();

    // Verify the password
    // if (password_verify($password, $user['password'])) {
        // Password matches, start a session
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['lastname'];
        $_SESSION['role'] = $user['role'];
            
        // Redirect to the dashboard or homepage
        if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'){
        header("Location: status.php");
        }
        else{
            header("Location: index.php");

        }
        exit();
    } else {
        // Password does not match
        echo "<script type='text/javascript'> 
        window.location.href = 'signin.html';
        alert('No user found with that username or Invalid password!');
        
        </script>";
    }
// Close the connection
$conn->close();