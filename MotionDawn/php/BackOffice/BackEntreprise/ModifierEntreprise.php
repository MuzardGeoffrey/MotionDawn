<?php 
$count =0;
if (($handle = fopen("Entreprise.csv","r"))) {
    while ($data = fgetcsv($handle, 1024, ";")) {
            $CSV[]=$data[0];
            $count++;

                    }
}else {
    echo "erreur de chargement";
}
include '../BackHead.php';
echo ' 	<form action="ModifierEntreprise_submit" method="get" accept-charset="utf-8">';
	for ($i=0; $i < $count; $i++) {
		echo '<label> Texte '; echo $i+1 ;
			echo'<input type="text" name="formulaire'.$i.'" class="formulaire" value="'.$CSV[$i].'">';
		echo '</label>';
	}
	echo '<input type="submit" name="" value="modifier">';
	echo '</form>';
		
 ?>