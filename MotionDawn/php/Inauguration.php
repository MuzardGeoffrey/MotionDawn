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
            <h1 class="Titre">Evenement</h1>
            <h2 class="TEvenement">'.$data[1].'</h2>
            <p class="PEvenement">'.$data[2].'</p>
            <img src="'.$data[3].'" id="inauguration">

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