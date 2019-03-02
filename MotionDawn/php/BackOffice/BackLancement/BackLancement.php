<?php
if (($handle = fopen("Lancement.csv","r"))) {
    while ($data = fgetcsv($handle, 1024, ";")) {
include '../BackHead.php';
// <!------------------------------------------------------->
// <!--               MENU DE NAVIGATION                  -->
// <!------------------------------------------------------->
include '../Backnav.php';
// <!------------------------------------------------------->
// <!--                     PAGE                          -->
// <!------------------------------------------------------->
          echo '<div id="evenement">
            <h1 class="Titre">Evenement</h1>
            <h2 class="TEvenement">'.$data[1].'</h2>
            <p class="PEvenement">'.$data[2].'</p>
            <img src="../../'.$data[3].'" id="lancement">
            <a href="ModifierLancement.php" name="modifier"><input type="submit" name="modifier" value="modifier"></a>

        </div>';
// <!------------------------------------------------------->
// <!--                      FOOTER                       -->
// <!------------------------------------------------------->
include '../BackFooter.php';
    }
}else {
    echo "erreur de chargement";
}
?>