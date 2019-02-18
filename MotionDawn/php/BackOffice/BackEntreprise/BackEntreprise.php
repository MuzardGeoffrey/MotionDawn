<?php
if (($handle = fopen("Entreprise.csv","r"))) {
    while ($data = fgetcsv($handle, 1024, ';')) {
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
                    <p>".
                    $data[1]
                    ."</p>
                </div>
                <div class='titreEntreprise'>
                    <h2>Nos principaux atouts</h2>
                        <p>".
                        $data[2]
                        .'</p>
                    <form action="ModifierEntreprise.php" method="post" accept-charset="utf-8">
                        <input type="submit" name="modifier" value="modifier">
                    </form>
                </div>
            </section>';
    }
}else {
    echo "erreur de chargement";
}

// <!------------------------------------------------------->
// <!--                      FOOTER                       -->
// <!------------------------------------------------------->
include '../BackFooter.php';
?>