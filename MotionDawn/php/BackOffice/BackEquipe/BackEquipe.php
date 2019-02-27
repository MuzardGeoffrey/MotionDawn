<?php
if (($handle = fopen("Equipe.csv","r"))) {
    while ($data = fgetcsv($handle, 1024, ";")) {      
include '../BackHead.php';
// <!------------------------------------------------------->
// <!--               MENU DE NAVIGATION                  -->
// <!------------------------------------------------------->
include '../Backnav.php';
        echo '<div>
            <h1>Equipe</h1>
            <p id="PEquipe">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis.</p>
            <div id="equipe">
                <div class="employee">
                    <img src="img/chan.jpg" class="photo">
                    <p>Nom - Prenom</p>
                    <p>role</p>
                </div>
                <div class="employee">
                    <img src="img/DRH.jpg" class="photo">
                    <p>Nom - Prenom</p>
                    <p>role</p>
                </div>
                <div class="employee">
                    <img src="img/E=MC2.jpg" class="photo">
                    <p>Nom - Prenom</p>
                    <p>role</p>
                </div>
                <div class="employee">
                    <img src="img/lelouch.jpg" class="photo">
                    <p>Nom - Prenom</p>
                    <p>role</p>
                </div>
                <div class="employee">
                    <img src="img/girl.jpg" class="photo">
                    <p>Nom - Prenom</p>
                    <p>role</p>
                </div>
                <div class="employee">
                    <img src="img/mael.jpg" class="photo">
                    <p>Nom - Prenom</p>
                    <p>role</p>
                </div>
                <div class="employee">
                    <img src="img/thierry.jpg" class="photo">
                    <p>Nom - Prenom</p>
                    <p>role</p>
                </div>
                <div class="employee">
                    <img src="img/patron.jpg" class="photo">
                    <p>Nom - Prenom</p>
                    <p>role</p>
                </div>
                <div class="employee">
                    <img src="img/grilr.jpg" class="photo">
                    <p>Nom - Prenom</p>
                    <p>role</p>
                </div>
                <div class="employee">
                    <img src="img/child.jpg" class="photo">
                    <p>Nom - Prenom</p>
                    <p>role</p>
                </div>
            </div>
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
