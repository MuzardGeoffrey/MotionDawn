<?php
$j = 0;

include '../BackHead.php';
// <!------------------------------------------------------->
// <!--               MENU DE NAVIGATION                  -->
// <!------------------------------------------------------->
include '../Backnav.php';
	echo "<lu id='retour'>";
	if (($handle = fopen("BD.csv","r"))) {
    	while ($data = fgetcsv($handle, 1024, ";")) {
    		$num = count($data);
    		echo '<li class="contact">Retour Formulmaire '; echo $j+1; echo'</br>' ;
        	for ($i = 0; $i < $num; $i++) {
                    
			echo $data[$i] . "</br>";
		}
		echo '</li>';
	$j++;
	}
}else {
    echo "erreur de chargement";
}
	echo "</lu>";
include '../BackFooter.php'; 
 ?>