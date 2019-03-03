<?php
$j = 1;
include '../BackHead.php';
// <!------------------------------------------------------->
// <!--               MENU DE NAVIGATION                  -->
// <!------------------------------------------------------->
include '../Backnav.php';
	echo "<table>";
	if (($handle = fopen("BD.csv","r"))) {
    	while ($data = fgetcsv($handle, 1024, ";")) {
    		$num = count($data);
    		echo '<tr><td>Retour Formulmaire '; echo $j;echo "</td>";
        	for ($i = 0; $i < $num; $i++) {
                    
			echo "<td>" . $data[$i] . "</td>";
		}
		echo '</tr>';
	$j++;
	}
}else {
    echo "erreur de chargement";
}
	echo "</table>";

	echo '<form action="supprimer.php" method="post" accept-charset="utf-8">
		<input type="submit" name="supprimer" value="Tout supprimer">
		</form>';
include '../BackFooter.php'; 
 ?>