<?php
// $row=1;
// if (($handle = fopen("Entreprise.csv","r")) != FALSE) {
//     while ($data = fgetcsv($handle, 1000, ",")) != FALSE {
//         $num = count($data);
//         for ($i = 0; $i < $num; $i++) {
//             echo $data[$i].' ';
//         }
//         $row++;
//     }
//     fclose($handle);
// }
// else {
//     echo "erreur de chargement";
// }



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
                    <p>"."</p>
                </div>
                <div class='titreEntreprise'>
                    <h2>Nos principaux atouts</h2>
                        <p> 1 - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
                        2 - At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.<br>
                        3 - Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis .<br>
                        4 - Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                </div>
            </section>";
// <!------------------------------------------------------->
// <!--                      FOOTER                       -->
// <!------------------------------------------------------->
include 'Footer.php';
?>