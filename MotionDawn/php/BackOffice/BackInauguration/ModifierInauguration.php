<?php
if (($handle = fopen("Inauguration.csv","r"))) {
    while ($data = fgetcsv($handle, 1024, ";")) {
include '../BackHead.php';
// <!------------------------------------------------------->
// <!--               MENU DE NAVIGATION                  -->
// <!------------------------------------------------------->
include '../Backnav.php';
echo ' 	<form action="Modifier.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">';
	for ($i=1; $i < count($data); $i++) {
		$ma_chaine = $data[$i];
		$trouve_moi  = '.jpg';
		$position = strpos($ma_chaine, $trouve_moi);
		if ($position === false){
			echo '<label> Texte '; echo $i ;
				echo'<input type="text" name="formulaire'.$i.'" class="formulaire" value="'.$data[$i].'">';
			echo '</label>';
		}else{
			echo '<input type="hidden" name="MAX_FILE_SIZE" value="100000">
                Fichier : <input type="file" value="parcourir..." name="img"'.$i.'>';
        }
	}
	echo '<input type="submit" name="Modifier" value="Modifier">
	</form>';
    }
}else {
    echo "erreur de chargement";
}
 ?>