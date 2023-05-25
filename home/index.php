<<<<<<< Updated upstream:home/index.html
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
    <div class="banner">
        <div class="navbar">
            <img src="../Foto/logo.png" class="logo">
            <ul>
                <li><a href="#"><a href="index.html">Home</a></li>
                <li><a href="#"><a href="profiel.html">Profiel</a></li>
                <li><a href="#"><a href="Interesses.html">Uitlog</a></li>
            </ul>
        </div>
</body>
=======
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
    <div class="banner">
        <div class="navbar">
            <img src="../Foto/logo.png" class="logo">
            <ul>
                <li><a href="#"><a href="index.html">Home</a></li>
                <li><a href="#"><a href="profiel.html">Profiel</a></li>
                <li><a href="#"><a href="Interesses.html">Uitloggen</a></li>
            </ul>
        </div>
        <form action="../notitie/notitie.php" method="POST">
        <input type="submit" value="notitie">
        </form>
        <?php
        session_start();

        if (isset($_SESSION['id'])) {
            $user_id = $_SESSION['id'];
            // User ID is properly established, you can proceed with further operations
            echo "User ID: " . $user_id;
        } else {
            // User ID is not set, handle the case accordingly
            echo "User ID is not set.";
        }
        
        ?>
</body>
>>>>>>> Stashed changes:home/index.php
</html>