<?php
if (($handle = fopen("Entreprise.csv","r"))) {
    while ($data = fgetcsv($handle, 1024, ";")) {
include '../BackHead.php';
// <!------------------------------------------------------->
// <!--               MENU DE NAVIGATION                  -->
// <!------------------------------------------------------->
include '../Backnav.php';
echo ' 	<form action="Modifier.php" method="post" accept-charset="utf-8">';
	for ($i=1; $i < count($data); $i++) {
		echo '<label> Texte '; echo $i ;
			echo'<input type="text" name="formulaire'.$i.'" class="formulaire" value="'.$data[$i].'">';
		echo '</label>';
	}
	echo '<input type="submit" name="Modifier" value="Modifier">
	</form>';
    }
}else {
    echo "erreur de chargement";
}
 ?>