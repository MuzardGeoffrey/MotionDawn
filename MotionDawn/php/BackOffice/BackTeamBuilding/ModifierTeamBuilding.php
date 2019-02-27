<?php
//Affiche les champs pour changer les elements d'inauguration 
$j = 1;

include '../BackHead.php';

// <!------------------------------------------------------->
// <!--               MENU DE NAVIGATION                  -->
// <!------------------------------------------------------->
include '../Backnav.php';

echo ' 	<form action="Modifier.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">';
if (($handle = fopen("TeamBuilding.csv","r"))) {
    while ($data = fgetcsv($handle, 1024, ";")) {
		for ($i=1; $i < count($data); $i++) {

			$ma_chaine = $data[$i];
			$trouve_moi  = '.jpg'; //cherche l'extantion du fichier pour savoir si c'est une image
			$position = strpos($ma_chaine, $trouve_moi);

			if ($position === false){//si ce n'est pas une image mettre ce champ
				echo '<label> Texte '; echo $j ;
					echo'<input type="text" name="formulaire'.$j.'" class="formulaire" value="'.$data[$i].'">';
				echo '</label>';
			}else{//si c'est une image mettre ce champ
				echo '<input type="file" value="parcourir..." name= "formulaire'.$j.'"">';
	        }
	        $j++;
		}
    }
	echo '<input type="submit" name="Modifier" value="Modifier">
	</form>';
	echo '<form action="Ajouter.php" method="post" accept-charset="utf-8">
		<input type="submit" name="Ajouter Texte" value="Ajouter Texte">
		<input type="submit" name="Ajouter Image" value="Ajouter Image">
		</form>';
}else {
    echo "erreur de chargement";
}
 ?>