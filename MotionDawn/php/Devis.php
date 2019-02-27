<?php include 'Head.php';

// <!------------------------------------------------------->
// <!--               MENU DE NAVIGATION                  -->
// <!------------------------------------------------------->
include 'nav.php';
// <!------------------------------------------------------->
// <!--                   Contactez-Nous                  -->
// <!------------------------------------------------------->
           echo '<form class="devis" action="Insert.php" method="POST">
           <h1>Contactez Nous</h1>
               <input type="text" name="nom" id="nom" class="champs" placeholder="Nom de votre société"/>
               <input type="email" name="email" id="email" placeholder="Adresse email de contact"/>
               <input type="text" name="objet" id="objet" placeholder="Objet"/>
               <textarea name="information" id="information" placeholder="Taper votre demande" rows="15" cols="70"></textarea>
           <input type="submit" value="Envoyer" />
       </form>
       
       <img id="barre" src="img/Barre_Contact.PNG" />';
// <!------------------------------------------------------->
// <!--                        Devis                      -->
// <!------------------------------------------------------->
            echo '<form class="devis" action="Insert.php" method="POST">
            <h1>Devis</h1>
                <input type="text" name="entreprise" id="entreprise" class="entreprise" placeholder="Nom de votre Entreprise"/>
                <input type="text" name="nom" id="nom" class="champs" placeholder="Nom"/>
                <input type="text" name="prenom" id="prenom" class="champs" placeholder="Prenom"/>
                <input type="text" name="adresse" id="adresse" class="champs" placeholder="Adresse de la société"/>
                <input type="text" name="code" id="code" class="champs" placeholder="Code Postal"/>
                <input type="text" name="ville" id="ville" class="champs" placeholder="Ville"/>
                <input type="email" name="email" id="email" class="champs" placeholder="Email"/>
                <input type="text" name="telephone" id="telephone" class="champs" placeholder="Telephone"/>
                <input type="text" name="date" id="date" placeholder="Date de l\'évènement"/>
                <input type="text" name="objet" id="objet" placeholder="Objet"/>
                <input type="text" name="adresseEvenement" id="adresseEvenement" class="champs" placeholder="Adresse de l\'évènement (Facultatif)"/>
                <textarea name="information" id="information" placeholder="Détaillez votre évènement"></textarea>
            <input type="submit" value="Envoyer" />
        </form>
    </div>';
// <!------------------------------------------------------->
// <!--                      FOOTER                       -->
// <!------------------------------------------------------->
include 'Footer.php'; 
?>