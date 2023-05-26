<?php
session_start();

include "../back-end/conn.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $title = $_POST["title"];
    $description = $_POST["description"];
    $date = $_POST["date"];
    $user_id = $_SESSION['id'];

   
    $sql = "INSERT INTO notitie (title, description, date, user_id) VALUES (?, ?, ?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("sssi", $title, $description, $date, $user_id);

   
    if ($stmt->execute()) {
      
        header("Location: notitie.php");
        exit();
    } else {
       
        echo "Er is iets fout gegaan. Probeer het later nog eens.";
        exit();
    }

    $stmt->close();
    $conn->close();
}
?>
