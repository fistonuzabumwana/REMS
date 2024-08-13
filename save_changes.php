<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rems";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the data from the AJAX request
$data = json_decode(file_get_contents('php://input'), true);

foreach ($data as $row) {
    $id = $row['id'];
    $firstname = $conn->real_escape_string($row['firstname']);
    $lastname = $conn->real_escape_string($row['lastname']);
    $country = $conn->real_escape_string($row['country']);
    $email = $conn->real_escape_string($row['email']);
    $phone = $conn->real_escape_string($row['phone']);
    $password = $conn->real_escape_string($row['password']);
    $date = $conn->real_escape_string($row['date']);
    $agreed = $conn->real_escape_string($row['agreed']);
    $role = $conn->real_escape_string($row['role']);

    // Update the database record
    $sql = "UPDATE user SET 
                firstname='$firstname',
                lastname='$lastname',
                Country='$country',
                email='$email',
                phone='$phone',
                `password`='$password',
                `Date`='$date',
                Agreed='$agreed',
                `role`='$role'
            WHERE id='$id'";
    
    if ($conn->query($sql) !== TRUE) {
        echo json_encode(['status' => 'error', 'message' => 'Error updating record: ' . $conn->error]);
        exit();
    }
}

echo json_encode(['status' => 'success', 'message' => 'Records updated successfully']);
$conn->close();
?>
