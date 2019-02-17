<?php 
if (($handle = fopen("Lancement.csv","r"))) {
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
// <!--                     PAGE                          -->
// <!------------------------------------------------------->
        echo '<div id="evenement">
            <h1 class="Titre">Evenement</h1>
            <h2 class="TEvenement">Lancement de Produit</h2>
            <p class="PEvenement">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe</p>
            <img src="img/Lancement.PNG" id="inauguration">
        </div>';
// <!------------------------------------------------------->
// <!--                      FOOTER                       -->
// <!------------------------------------------------------->
include '../BackFooter.php'; 
?>