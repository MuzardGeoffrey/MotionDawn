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
	for ($i=0; $i < $count; $i++) {
		echo 'Texte '; echo $i+1 ;
			echo '<p>'.$CSV[$i].'<p>';
	}
 ?>