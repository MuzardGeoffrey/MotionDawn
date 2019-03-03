<?php include 'Head.php';

// <!------------------------------------------------------->
// <!--               MENU DE NAVIGATION                  -->
// <!------------------------------------------------------->
include 'nav.php';
             echo "<form id='formulaire' action='Insert.php' method='POST' class='contactez'>
                     <h1 class='Titre'>Contactez Nous</h1>
                     <input type='text' name='nom' id='nom' class='zone' placeholder='Nom de votre société'/>
                     <input type='email' name='mail' id='mail' class='zone' placeholder='Adresse email de contact'/>
                     <input type='text' name='objet' id='objet' class='zone' placeholder='Objet'/>
                     <textarea name='information' id='information' class='zone' placeholder='Taper votre demande' rows='15' cols='70'></textarea>
                     <input type='submit' class='boutonEnvoyer' value='Envoyer' />
                   </form>";
// <!------------------------------------------------------->
// <!--                      FOOTER                       -->
// <!------------------------------------------------------->
include 'Footer.php';
?>