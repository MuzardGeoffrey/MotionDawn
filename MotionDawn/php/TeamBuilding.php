<?php

if (($handle = fopen("BackOffice/BackTeamBuilding/TeamBuilding.csv","r"))) {
    while ($data = fgetcsv($handle, 1024, ";")) {

include 'Head.php';

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
            <img src="'.$data[3].'" alt="image_TeamBuilding" id="teambuilding">
            </div>';

    }
}else {
    echo "erreur de chargement";
}
// <!------------------------------------------------------->
// <!--                      FOOTER                       -->
// <!------------------------------------------------------->
include 'Footer.php' 
?>