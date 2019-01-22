<?php include 'Head.php';

// <!------------------------------------------------------->
// <!--               MENU DE NAVIGATION                  -->
// <!------------------------------------------------------->
include 'nav.php';
             echo "<form action='Insert.php' method='POST'>
                <h1 id='titreContactezNous'>Contactez Nous</h1>
                <input type='text' name='nom' id='nom' class='champs' placeholder='Nom de votre société'/>
                <input type='email' name='mail' id='mail' placeholder='Adresse email de contact'/>
                <input type='text' name='objet' id='objet' placeholder='Objet'/>
                <textarea name='information' id='information' placeholder='Taper votre demande' rows='15' cols='70'></textarea>
                <input type='submit' value='Envoyer' />
            </form>";
// <!------------------------------------------------------->
// <!--                      FOOTER                       -->
// <!------------------------------------------------------->
include 'Footer.php';?>