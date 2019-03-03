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
        echo '<h1>Entreprise</h1>
            <section id="contenu">
                <div class="titreEntreprise">
                    <h2>Présentation</h2>
                    <p>'.
                    $data[1]
                    .'</p>
                </div>
                <a href="ModifierEntreprise.php" title=""><input type="submit" name="modifier" value="modifier"></a>
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