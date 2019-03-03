<?php include 'Head.php';
// <!------------------------------------------------------->
// <!--               MENU DE NAVIGATION                  -->
// <!------------------------------------------------------->
include 'nav.php';
// <!------------------------------------------------------->
// <!--                   CARROUSEL                       -->
// <!------------------------------------------------------->
echo "<img href='index.html' src='img/Logo.bmp' alt='Logo MotionDawn' id='logo_responsive'/>

      <div id='content'>
            <h1 id='titre_accueil'>Nos Réalisations !</h1>
            <div class='galerie_carousel'>
                <div>
                    <img src='img/Toutou.jpg' alt='Toutou' class='Galerie'>
                    </div>
                <div>
                    <img src='img/Inauguration.jpg' alt='Inauguration' class='Galerie'>
                </div>
                <div>
                    <img src='img/Lancement.PNG' alt='Lancement' class='Galerie'>
                </div>
            </div>
            <p class='Titre_logo'>Nos Partenaires</p>
            <div id='bloc_logo'>
                <img src='img/LogoGoogle.jpg' alt='logo_Google' class='logo'>
                <img src='img/logoSamsung.jpg' alt='Logo_Samsung' class='logo'>
                <img src='img/LogoApple.jpg' alt='Logo_Apple' class='logo'>
            </div>
     </div>
     <script src='js/jquery-1.11.0.min.js'></script>
     <script src='js/jquery-migrate-1.2.1.min.js'></script>
     <script src='slick/slick.min.js'></script>
        
     <script src='js/carrousel.js'></script>";
// <!------------------------------------------------------->
// <!--                      FOOTER                       -->
// <!------------------------------------------------------->
include 'Footer.php'; 
?>