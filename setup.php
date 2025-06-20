<?php
require_once 'config.php';

// Create connection to MySQL server
$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected to MySQL server successfully.<br>";

// Create database
$sql_db = "CREATE DATABASE IF NOT EXISTS " . DB_NAME;
if ($conn->query($sql_db) === TRUE) {
    echo "Database '" . DB_NAME . "' created successfully or already exists.<br>";
} else {
    die("Error creating database: " . $conn->error . "<br>");
}

// Select the database
$conn->select_db(DB_NAME);

// SQL to create table
$sql_table = "CREATE TABLE IF NOT EXISTS messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql_table) === TRUE) {
    echo "Table 'messages' created successfully or already exists.<br>";
} else {
    die("Error creating table: " . $conn->error . "<br>");
}

echo "<h2>Setup Complete!</h2>";
echo "<p>You can now delete this 'setup.php' file.</p>";
echo "<a href='index.php'>Go to Homepage</a>";

$conn->close();
?>