<?php
if (($handle = fopen("Inauguration.csv","r"))) {
    while ($data = fgetcsv($handle, 1024, ";")) {
        $_SESSION["titrenav1"] = $data[1];
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
            <img src="'.$data[3].'" id="inauguration">
            <form action="ModifierInauguration.php" method="post" accept-charset="utf-8">
                <input type="submit" name="modifier" value="modifier">
            </form>
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