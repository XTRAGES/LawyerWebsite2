<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: index.php');
    exit;
}

require_once '../config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("DELETE FROM messages WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: dashboard.php?status=deleted");
    } else {
        header("Location: dashboard.php?status=error");
    }

    $stmt->close();
    $conn->close();
} else {
    header("Location: dashboard.php");
}
?>