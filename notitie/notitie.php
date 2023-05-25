

<?php
include_once("../back-end/conn.php");
session_start();


    $user_id = $_SESSION['id'];
	$sql = "SELECT * FROM notitie WHERE user_id = '$user_id'";
	$result = $con->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZorgVitaal</title>
    <link rel="stylesheet" href="notitie.css">
</head>
<body>
    <div class="banner">
        <div class="navbar">
            <img src="../Foto/logo.png" class="logo">
            <ul>
                <li><a href="#"><a href="index.html">Home</a></li>
                <li><a href="#"><a href="profiel.html">Profiel</a></li>
                <li><a href="#"><a href="Interesses.html">Uitloggen</a></li>
            </ul>
        </div>

    </form>
    <table class="table">
    <thead>
        <tr>
            <th>Categorie</th>
            <th>Price</th> 
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["title"] . "</td>
                    <td>€" . $row["description"] . "</td>
                    <td>" . $row["date"] . "</td>
                    <td>
                    <form method='post' action='budget-delete.php'>
                        <input type='hidden' name='id' value='" . $row["notitie_id"] . "'>
                        <button type='submit' class='delete-button'>Delete</button>
                    </form>
                    </td>
                </tr>";
        }
        
        ?>
    </tbody>
    </table>
</div>     
</div>
<div class="list-container">   
<form method="post">
</body>
</html>








