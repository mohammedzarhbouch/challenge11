<?php
session_start();

include_once("conn.php");

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $con->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $password);

// Set the values of $username and $password here

if ($stmt->execute()) {
    if ($stmt->affected_rows > 0) {
        header("Location: ../home/index.php");
        exit;
    } else {
        echo "Error: Failed to create account. Please try again.";
    }
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
?>
