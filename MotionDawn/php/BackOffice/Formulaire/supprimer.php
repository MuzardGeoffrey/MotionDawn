<?php
$list = ["Nom","Prenom","Adresse","Code Postal","Ville","Email","Telephone","Date de l'évènement","Objet","Adresse de l'évènement","Description"];
echo "<pre>";
	var_dump($list);
echo "<pre>";
$fp = fopen("BD.csv","w");//
fprintf($fp, chr(0xEF).chr(0xBB).chr(0xbf));
fputcsv($fp,$list,";");
fclose($fp);
header("location:Formulaire.php")
 ?>