<?php
session_start();
if (($handle = fopen("Entreprise.csv","r"))) {
    while ($data = fgetcsv($handle, 1024, ";")) {
            $CSV[]=$data[0];
                    }
}else {
    echo "erreur de chargement";
}
include '../BackHead.php';
// <!------------------------------------------------------->
// <!--               MENU DE NAVIGATION                  -->
// <!------------------------------------------------------->
include '../Backnav.php';
// <!------------------------------------------------------->
// <!--                        Entreprise                 -->
// <!------------------------------------------------------->
        echo "<h1>Entreprise</h1>
            <section id='contenu'>
                <div class='titreEntreprise'>
                    <h2>Présentation</h2>
                    <p>";
                    echo $CSV[0]; 
                    echo"</p>
                </div>
                <div class='titreEntreprise'>
                    <h2>Nos principaux atouts</h2>
                        <p>";
                        echo $CSV[1];
                        echo '</p>
                    <form action="ModifierEntreprise.php" method="post" accept-charset="utf-8">
                        <input type="submit" name="modifier" value="modifier">
                    </form>
                </div>
            </section>';

// <!------------------------------------------------------->
// <!--                      FOOTER                       -->
// <!------------------------------------------------------->
include '../BackFooter.php';
?>