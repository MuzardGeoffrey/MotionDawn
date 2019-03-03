<?php
//Affiche les champs pour changer les elements d'inauguration 
// $j = 1;

include '../BackHead.php';

// <!------------------------------------------------------->
// <!--               MENU DE NAVIGATION                  -->
// <!------------------------------------------------------->
include '../Backnav.php';

echo ' 	<form action="Modifier.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">';
if (($handle = fopen("Inauguration.csv","r"))) {
    while ($data = fgetcsv($handle, 1024, ";")) {

    	echo '<div id="evenement">';

			echo "<label class='formulaire TEvenement'> Titre de l'évènement ";
				echo'<input type="text" name="formulaire'. 1 .'" class="formulaire" value="'.$data[1].'">';
			echo '</label>';

			echo "<label class='formulaire TEvenement'> Texte de l'évènement ";
					echo'<textarea name=" formulaire2" class="formulaire" rows="15" cols="70">'.$data[2].'</textarea>';
			echo '</label>';

			echo '<img src="../../'.$data[3].'" id="inauguration">';
			echo "<label class='formulaire'> Image de l'évènement";
				echo '<input type="file" value="parcourir..." name= "formulaire'. 3 .'"">';
			echo "</label>";
			echo '<input type="submit" name="Modifier" value="Modifier">
		</form>
			</div>';



		// for ($i=0; $i < count($data); $i++) {

			// $ma_chaine = $data[$i];
			// $trouve_moi  = '.jpg'; //cherche l'extantion du fichier pour savoir si c'est une image
			// $position = strpos($ma_chaine, $trouve_moi);

			// if ($position === false){//si ce n'est pas une image mettre ce champ
			// 	echo '<label> Texte '; echo $j ;
			// 		echo'<input type="text" name="formulaire'.$j.'" class="formulaire" value="'.$data[$i].'">';
			// 	echo '</label>';
			// }else{//si c'est une image mettre ce champ
			// 	echo '<input type="file" value="parcourir..." name= "formulaire'.$j.'"">';
	  //       }
	  //  $j++;
		// }
    }

}else {
    echo "erreur de chargement";
}
 ?>