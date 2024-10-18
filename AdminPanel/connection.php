<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stayvista";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// $sql = "INSERT INTO users (first_name, last_name, username, password, email, phone_number) VALUES (?, ?, ?, ?, ?, ?)";
// $stmt = $conn->prepare($sql);
// $stmt->bind_param("sssssi", $first_name, $last_name, $username, $password, $email, $phone_number);

// if ($stmt === false) {
//     die("Prepare failed: " . $conn->error);
// }

// Assuming $username and $email are defined somewhere in your code

// if (!$stmt->execute()) {
//     die("Execution failed: " . $stmt->error);
// }

// echo "New record created successfully";

