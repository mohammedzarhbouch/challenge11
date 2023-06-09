

<?php
session_start();
include('../back-end/conn.php');

$user_id = $_SESSION['id'];

$sql = "SELECT pill_name, pill_amount FROM pills WHERE pill_id = user_id";
$result = $con->query($sql);
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="main-styles.css">

    <title>Medicatie</title>
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
    <main>
        
    <button class="button-toevoegen" onclick="window.location.href = 'toevoegen.php';">Toevoegen</button>

    

    

    <div class="day_box_container">
    <?php
    // Fetch the distinct day values from the database
    $sql = "SELECT DISTINCT day FROM pills";
    $result = $con->query($sql);

    // Iterate over the days
    while ($row = $result->fetch_assoc()) {
        $day = $row['day'];

        echo '<div class="day_box">';
        echo "<div class='day_name'>$day</div>";

        // Create a form for each day
        echo "<form action='delete-pill.php' method='post'>";
        echo "<input type='hidden' name='id' value='$day'>"; // Hidden input field with the day value
        echo "<div class='delete_button'><button type='submit'>delete</button></div>"; // Modify delete button

        echo '<div class="pill_container">';
        
        // Fetch pills for the current day from the database
        $sql_pills = "SELECT pill_name, pill_amount FROM pills WHERE day = '$day'";
        $result_pills = $con->query($sql_pills);

        // Check if any pills found for the day
        if ($result_pills->num_rows > 0) {
            while ($row_pills = $result_pills->fetch_assoc()) {
                $name = $row_pills['pill_name'];
                $amount = $row_pills['pill_amount'];

                echo '<div class="pill">';
                echo "<div class='pill_naam'>$name</div>";
                echo "<div class='pill_amount'>hoeveelheid: $amount</div>";
                echo '</div>';
            }
        } else {
            echo "No items found for $day.";
        }

        echo '</div>'; // Close pill_container
        echo '</form>'; // Close the form
        echo '</div>'; // Close day_box
    }
    ?>
</div>

</div>


</div>

        
        
        
    


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

