<?php include 'Head.php';
if (($handle = fopen("BackOffice/BackInauguration/Inauguration.csv","r"))) {
    while ($data = fgetcsv($handle, 1024, ";")) {
// <!------------------------------------------------------->
// <!--               MENU DE NAVIGATION                  -->
// <!------------------------------------------------------->
include 'nav.php';
// <!------------------------------------------------------->
// <!--                     PAGE                          -->
// <!------------------------------------------------------->
        echo '<div id="evenement">
                <h1 class="Titre">Evènement</h1>
                <h2>'.$data[1].'</h2>
                <p>'.$data[2].'</p>
                <img src="'.$data[3].'" alt="image_Inauguration" id="inauguration">
              </div>';
    	}	
} else {
    echo "erreur de chargement";
}
// <!------------------------------------------------------->
// <!--                      FOOTER                       -->
// <!------------------------------------------------------->
include 'Footer.php'; 
?>