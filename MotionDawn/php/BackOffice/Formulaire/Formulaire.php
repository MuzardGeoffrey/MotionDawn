<?php
$count =0;
if (($handle = fopen("BD.csv","r"))) {
    while ($data = fgetcsv($handle, 1024, ";")) {
            $CSV[]=$data[0];
            $count++;
                    }
}else {
    echo "erreur de chargement";
}
include '../BackHead.php';
// <!------------------------------------------------------->
// <!--               MENU DE NAVIGATION                  -->
// <!------------------------------------------------------->
include '../Backnav.php';
	echo "<p id=''>";
	for ($i=0; $i < $count; $i++) {
		echo '<div class="contact">Texte '; echo $i+1; echo'</br>' ;
			echo $CSV[$i].'</div>';
	}
	echo "<p>";
include '../BackFooter.php'; 
 ?>