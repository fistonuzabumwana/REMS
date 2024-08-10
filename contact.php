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
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $service = $_POST['service'];
    $message = $_POST['message'];

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO contactinfo (name, email, phone, gender, service, message) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $email, $phone, $gender, $service, $message);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
