<?php
if (($handle = fopen("Entreprise.csv","r"))) {
    while ($data = fgetcsv($handle, 1024, ";")) {
include '../BackHead.php';
// <!------------------------------------------------------->
// <!--               MENU DE NAVIGATION                  -->
// <!------------------------------------------------------->
include '../Backnav.php';
echo ' 	<form action="Modifier.php" method="post" accept-charset="utf-8">';
		echo '<label> Contenue de la page' ;
			echo'<textarea name=" formulaire1" class="formulaire" rows="15" cols="70">'.$data[1].'</textarea>"';
		echo '</label>';
	}
	echo '<input type="submit" name="Modifier" value="Modifier">
	</form>';
}else {
    echo "erreur de chargement";
}
 ?>