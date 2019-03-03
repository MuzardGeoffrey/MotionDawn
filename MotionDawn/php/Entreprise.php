<?php 

if (($handle = fopen("BackOffice/BackEntreprise/Entreprise.csv","r"))) {
    while ($data = fgetcsv($handle, 1024, ';')) {

include 'Head.php';

// <!------------------------------------------------------->
// <!--               MENU DE NAVIGATION                  -->
// <!------------------------------------------------------->
include 'nav.php';
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
            </section>';
    }
}else {
    echo "erreur de chargement";
}
// <!------------------------------------------------------->
// <!--                      FOOTER                       -->
// <!------------------------------------------------------->
include 'Footer.php'; 
?>