<?php include 'Head.php';

// <!------------------------------------------------------->
// <!--               MENU DE NAVIGATION                  -->
// <!------------------------------------------------------->
include 'nav.php';
// <!------------------------------------------------------->
// <!--                   Contactez-Nous                  -->
// <!------------------------------------------------------->
           echo '<div id="formulaire">
                <div id=Contactez>
                    <form action="Insert.php" method="POST" id="contact">
                        <h1 class="Titre">Contactez Nous</h1>
                            <input type="text" name="nom" id="nom_societe" class="champs" placeholder="Nom de votre société"/>
                            <input type="email" name="mail" id="mail" class="champs" placeholder="Adresse email de contact"/>
                            <input type="text" name="objet" id="objet" class="champs" placeholder="Objet"/>
                            <textarea name="information" id="information" class="champs" placeholder="Taper votre demande" rows="15" cols="70"></textarea>
                        <input type="submit" id="envoyer" value="Envoyer" />
                    </form>                
                </div>';
// <!------------------------------------------------------->
// <!--                        Devis                      -->
// <!------------------------------------------------------->
            echo '<div id="Devis">
                    <form action="Insert.php" method="POST" id="devis">
                        <h1 class="Titre">Devis</h1>
                            <input type="text" name="entreprise" id="entreprise" class="champs" placeholder="Nom de votre Entreprise"/>
                            <input type="text" name="nom" id="nom" class="champs" placeholder="Nom"/>
                            <input type="text" name="prenom" id="prenom" class="champs" placeholder="Prénom"/>
                            <input type="text" name="adresse" id="adresse" class="champs" placeholder="Adresse de la société"/>
                            <input type="text" name="code" id="code" class="champs" placeholder="Code Postal"/>
                            <input type="text" name="ville" id="ville" class="champs" placeholder="Ville"/>
                            <input type="email" name="email" id="email" class="champs" placeholder="Email"/>
                            <input type="text" name="telephone" id="telephone" class="champs" placeholder="Téléphone"/>
                            <input type="text" name="date" id="date" class="champs" placeholder="Date de l\'évènement"/>
                            <input type="text" name="objet" id="objet" class="champs" placeholder="Objet"/>
                            <input type="text" name="adresseEvenement" id="adresseEvenement" class="champs" placeholder="Adresse de l\'évènement (Facultatif)"/>
                            <textarea name="information" id="information" class="champs" placeholder="Spécifiez les détailles de votre évènement" rows="15" cols="70"></textarea>
                        <input type="submit" id="envoyer" value="Envoyer"/>
                    </form>
                </div>
            </div>';
// <!------------------------------------------------------->
// <!--                      FOOTER                       -->
// <!------------------------------------------------------->
include 'Footer.php'; 
?>