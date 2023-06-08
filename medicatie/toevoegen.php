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



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZorgVitaal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="Toevoegen">
        <form method="post" action="toevoegen.php">
            <input type="text" name="pill_name" placeholder="Naam">
            <input type="text" name="pill_amount" placeholder="Hoeveelheid">
            <input type="text" name="day" placeholder="Dag">
            <button type="submit" class="add-button" href="pill.php">toevoegen</button>
        </form>
        </div>
</body>
</html>
