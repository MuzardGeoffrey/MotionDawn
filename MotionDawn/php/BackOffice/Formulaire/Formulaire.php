<?php
if ($_SESSION['CO'] != 1){
    header('Location:../index.php');//renvoie vers la page de connexion
}
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
	echo "<p>";
	for ($i=0; $i < $count; $i++) {
		echo 'Texte '; echo $i+1; echo'</br>' ;
			echo $CSV[$i].'</br>';
	}
	echo "<p>";
include '../BackFooter.php'; 
 ?>