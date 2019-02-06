<?php 
if (($handle = fopen("Entreprise.csv","r"))) {
    while ($data = fgetcsv($handle, 1024, ";")) {
            $CSV[]=$data[0];
                    }
}else {
    echo "erreur de chargement";
}
include '../BackHead.php';
echo ' 	<form action="ModifierEntreprise_submit" method="get" accept-charset="utf-8">
		<input type="text" name="" value=';echo csv[0]; echo' >
		<input type="text" name="" value=';echo csv[1]; echo '>
	</form>';
 ?>