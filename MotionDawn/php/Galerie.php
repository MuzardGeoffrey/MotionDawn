<?php include 'Head.php';

// <!------------------------------------------------------->
// <!--               MENU DE NAVIGATION                  -->
// <!------------------------------------------------------->
include 'nav.php';
// <!------------------------------------------------------->
// <!--                   CARROUSEL                       -->
// <!------------------------------------------------------->
        echo '<div>
                <h1 class="titre_galerie">Galerie</h1>
                <div class="galerie_carousel">
                    <div>
                        <img src="img/Toutou.jpg" alt="Toutou" class="Galerie">
                    </div>
                    <div>
                        <img src="img/Inauguration.jpg" alt="Inauguration" class="Galerie">
                    </div>
                    <div>
                        <img src="img/Lancement.PNG" alt="Lancement" class="Galerie">
                    </div>
                </div>
              </div>
              <script src="js/jquery-1.11.0.min.js"></script>
              <script src="js/jquery-migrate-1.2.1.min.js"></script>
              <script src="slick/slick.min.js"></script>
        
              <script src="js/carrousel.js"></script>';
// <!------------------------------------------------------->
// <!--                      FOOTER                       -->
// <!------------------------------------------------------->
include 'Footer.php';
?>