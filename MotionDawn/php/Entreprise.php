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
        echo '<h1 class="titre_entreprise">L\'entreprise</h1>
            <section id="contenu">
                <div class="presentation">
                    <h2 class="soustitre">Présentation</h2>
                    <p id="texte_entreprise">'.
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