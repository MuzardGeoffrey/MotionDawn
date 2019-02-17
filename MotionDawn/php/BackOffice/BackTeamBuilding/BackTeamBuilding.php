<?php 
if (($handle = fopen("TeamBuilding.csv","r"))) {
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
            <h1 class="Titre">Evènement</h1>
            <h2 class="TEvenement">Team Building</h2>
            <p class="PEvenement">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe';
            // .if (($handle = fopen("TeamBuilding.csv","r")) != FALSE) {
            // 	while (($data = fgetcsv($handle,1000,",")))
            // }
            // .'</p>
           echo '<img src="img/Toutou.jpg" id="inauguration">
        </div>'
        ;
// <!------------------------------------------------------->
// <!--                      FOOTER                       -->
// <!------------------------------------------------------->
include '../BackFooter.php'; 
?>