<?php
session_start();

require_once('../back-end/conn.php');
$username = $_SESSION['username'];
$query = "SELECT password FROM users WHERE username='$username'";
$result = mysqli_query($con, $query);
if ($result) {
    $row = mysqli_fetch_assoc($result);
    $password = $row['password'];
} else {
    echo "Error fetching user information from the database.";
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
    <div class="banner">
        <div class="navbar">
            <img src="../Foto/logo.png" class="logo">
            <ul>
                <li><a href="#"><a href="../home/index.php">Home</a></li>
                <li><a href="#"><a href="../profiel/index.php">Profiel</a></li>
                <li><a href="#"><a href="../back-end/loguit.php">Uitloggen</a></li>
            </ul>
        </div>
    </div>
    <div class="profiel_container">
        <div class="profiel_foto"></div>
        <p class="gegevens">Gebruikersnaam</p>
        <div class="inloggen"><?php
              echo  $username  ?>
              </div>
        <p class="gegevens1">password</p>
        <div id="inloggen1"><?php
              echo  $password
            
          ?></div>
    </div>
    <footer>
        <div id="footer_content">
            <div id="footer_contacts">
                <p>Leef Vitaal, Kies Zorgvitaal</p>
                <div id="footer_social_media">
                    <a href="#" class="footer-link" id="instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="#" class="footer-link" id="facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="#" class="footer-link" id="whatsapp">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>
            <ul class="footer-list">
                <li>
                    <h3>HANDIGE LINKS</h3>
                </li>
                <li>
                    <a href="#" class="footer-link">Over Ons</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Contact</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Evenementen</a>
                </li>
            </ul>
            <ul class="footer-list">
                <li>
                    <h3>PAGINA'S</h3>
                </li>
                <li>
                    <a href="#" class="footer-link">Mijn Pillen</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Artikelen</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Notities</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Agenda</a>
                </li>
            </ul>
            <div id="footer_subscribe">
                <h3>ABONNEER</h3>
                <p>
                    vul hier jouw e-mail in om op de hoogte te blijven 
                    van ons laatste nieuws!
                </p>
                <div id="input_group">
                    <input type="email" id="email">
                    <button>
                        <i class="fa-regular fa-envelope"></i>
                    </button>
                </div>
            </div>
        </div>
        <div id="footer_copyright">
            &#169
            2023 Leef Vitaal, Kies Zorgvitaal
        </div>
    </footer>
</body>
</html>