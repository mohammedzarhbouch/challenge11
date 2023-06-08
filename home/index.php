<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZorgVitaal</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index.js">
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
        

        <container>
        <div>
            <img src="../Foto/Blije-ouderen-canva.jpg" id="fotohome">
        </div>
            <div id="tekst">We begrijpen dat ouderen vaak extra ondersteuning
                en zorg nodig hebben en we zijn er om te helpen. Onze missie is 
                om een betere kwaliteit van leven te bieden aan ouderen door 
                middel van verschillende vormen van hulp en ondersteuning. 
                We bieden praktische hulp, zoals het doen van boodschappen, 
                koken en het helpen bij huishoudelijke taken. Daarnaast zorgen 
                we ook voor emotionele ondersteuning door middel van gezelschap,
                luisteren naar hun verhalen en het bieden van een sociaal netwerk.
                We streven ernaar om ouderen te helpen hun onafhankelijkheid te
                behouden en te genieten van een gelukkig en vervuld leven.</div>
    </container>

    <div id="box1">.</div>

    <div class="paginas">

    <div class="boxfoto" onclick="redirectToPage()">
    <img src="../Foto/pillen.gif" width="100%" height="60%" style="border-radius: 40px 40px 20px 20px;" ></div>

    <div class="boxfoto" onclick="redirectToPage2()">
    <img src="../Foto/Need a pencil_.gif" width="100%" height="60%" style="border-radius: 40px 40px 20px 20px;"></div>

    <div class="boxfoto"><img src="../Foto/agenda.gif" width="100%" height="60%" style="border-radius: 40px 40px 20px 20px;"></div>
    <div class="boxfoto"><img src="../Foto/Hands Typing WIP.gif" width="100%" height="60%" style="border-radius: 40px 40px 20px 20px;"></div>

</div>

<script>
  function redirectToPage() {
    window.location.href = "../medicatie/pill.php"; // Replace with the URL of the page you want to navigate to
  }

  function redirectToPage2() {
    window.location.href = "../notitie/notitie.php"; // Replace with the URL of the page you want to navigate to
  }
</script>

<div id="medicineGIF">  
<img src="../Foto/medicine.gif" width="200"/>
</div>

<div id="notesGIF">  
<img src="../Foto/notes.gif" width="200"/>
</div>

<div id="notebookGIF">  
<img src="../Foto/notebook.gif" width="200"/>
</div>

<div id="articleGIF">  
<img src="../Foto/article.gif" width="200"/>
</div>

        <!-- dit is de footer -->
    <!-- <main></main> -->
        <footer>
            <div id="footer_content">
                <div id="footer_contacts">
                    <p>Leef Vitaal, Kies Zorgvitaal</p>
    
                    <div id="footer_social_media">
                        <a href="https://www.instagram.com/" class="footer-link" id="instagram">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
    
                        <a href="https://nl-nl.facebook.com/" class="footer-link" id="facebook">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
    
                        <a href="https://web.whatsapp.com/" class="footer-link" id="whatsapp">
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