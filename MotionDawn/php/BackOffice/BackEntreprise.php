<?php
$row=1;
include 'Head.php';

// <!------------------------------------------------------->
// <!--               MENU DE NAVIGATION                  -->
// <!------------------------------------------------------->
include 'nav.php';
// <!------------------------------------------------------->
// <!--                        Entreprise                 -->
// <!------------------------------------------------------->
        echo "<h1>Entreprise</h1>
            <section id='contenu'>
                <div class='titreEntreprise'>
                    <h2>Présentation</h2>
                    <p>";
                    if (($handle = fopen("Entreprise.csv","r"))) {
                        while ($data = fgetcsv($handle, 1024, ",")) {
                            $num = count($data);
                            for ($i = 0; $i < $num; $i++) {
                                echo $data[$i].' ';
                            }
                            $row++;
                        }
                    }
                
                    else {
                        echo "erreur de chargement";
                    }
                   echo "</p>
                </div>
                <div class='titreEntreprise'>
                    <h2>Nos principaux atouts</h2>
                        <p>";
                    if (($handle = fopen("Entreprise.csv","r"))) {
                        while ($data = fgetcsv($handle, 1024, "$")) {
                        while ($data = fgetcsv($handle, 1024, ",")) {
                            $num = count($data);
                            for ($i = 0; $i < $num; $i++) {
                                echo $data[$i].' ';
                                
                            }
                            $row++;
                        }
                    }
                        fclose($handle);
                    }
                    else {
                        echo "erreur de chargement";
                    }
                    echo '</p>
                    <form action="Modificationcsv.php" method="post" accept-charset="utf-8">
                        <input type="submit" name="" value="">
                    </form>
                </div>
            </section>';
// <!------------------------------------------------------->
// <!--                      FOOTER                       -->
// <!------------------------------------------------------->
// include 'Footer.php';
// ?>

<?php
// if ($_POST['prenom'] == false) {
//     $list = ['Nom' => $_POST['nom'], 'Email' => $_POST['mail'], 'Objet' => $_POST['objet'], 'Information' => $_POST['information']];
// }
// else{
// $list = ['Nom' => $_POST['nom'], 'Prenom' => $_POST['prenom'], 'Adresse' => $_POST['adresse'], 'Code' => $_POST['code'], 'Ville' => $_POST['ville'], 'Email' => $_POST['email'], 'Telephone' => $_POST['telephone'], 'Date' => $_POST['date'], 'Objet' => $_POST['objet'], 'AdresseEvenement' => $_POST['adresseEvenement'], 'Information' => $_POST['information']];
// }
// $fp = fopen('BD.csv','a');
// fprintf($fp, chr(0xEF).chr(0xBB).chr(0xbf));
// fputcsv($fp,$list);
// fclose($fp);
//  ?>