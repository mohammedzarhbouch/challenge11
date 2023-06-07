

<?php
include_once("../back-end/conn.php");
session_start();


    $user_id = $_SESSION['id'];
	$sql = "SELECT * FROM notities WHERE user_id = '$user_id'";
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
<main>
    <div class="banner">
        <div class="navbar">
            <img src="../Foto/logo.png" class="logo">
            <ul>
                <li><a href="#"><a href="../home/index.html">Home</a></li>
                <li><a href="#"><a href="../profiel/profiel.html">Profiel</a></li>
                <li><a href="#"><a href="../back-end/loguit.php">Uitloggen</a></li>
            </ul>
        </div>

    </form>
    <div class="table-container">
        <div class="tableTables">
            <table>
            <thead>
                <tr>
                    <th>Titel</th>
                    <th>Bescrijving</th>
                    <th>Datum</th>
                    <th>Prullenbak</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["title"] . "</td>
                            <td>" . $row["description"] . "</td>
                            <td>" . $row["date"] . "</td>
                            <td>
                                <form method='post' action='delete-notitie.php'>
                                    <input type='hidden' name='id' value='" . $row["notitie_id"] . "'>
                                    <button type='submit' class='delete-button'>Verwijderen</button>
                                </form>
                            </td>
                        </tr>";
                }


                
                ?>
            </tbody>
            </table>
        </div>
        <div class="notitieToevoegen">
        <form method="post" action="notitie-insert.php">
            <input type="text" name="title" placeholder="Titel">
            <input type="text" name="description" placeholder="Beschrijving">
            <input type="date" name="date" placeholder="Datum">
            <button type="submit" class="add-button">toevoegen</button>
        </form>
        </div>
    </div>     
</div>
<div class="list-container">   
<form method="post">


        
        </main>
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








