<?php
session_start();

include "../back-end/conn.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    
    $user_id = $_SESSION['id'];
    $pill_name = $_POST['pill_name'];
    $pill_amount = $_POST['pill_amount'];
    $day = $_POST['day'];


    $sql = "INSERT INTO pills (pill_name, pill_amount, day, user_id) VALUES (?, ?, ?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("sisi", $pill_name, $pill_amount, $day, $user_id);

   
    if ($stmt->execute()) {
      
        header("Location: pill.php");
        exit();
    } else {
       
        echo "Er is iets fout gegaan. Probeer het later nog eens.";
        exit();
    }

    $stmt->close();
    $conn->close();
}


?>

