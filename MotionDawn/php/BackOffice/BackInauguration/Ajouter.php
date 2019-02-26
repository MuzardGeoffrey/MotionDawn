<?php
echo "<pre>";
	var_dump($_POST);
echo "<pre>";
if ($_POST['Ajouter_Texte'] == "Ajouter Texte") {
	$list = ["ajoute"];
}
else{
$list = ["Ajoute.jpg"];
}
echo "<pre>";
	var_dump($list);
echo "<pre>";
$fp = fopen('Inauguration.csv','a');//
fprintf($fp, chr(0xEF).chr(0xBB).chr(0xbf));
fputcsv($fp,$list,";");
fclose($fp);
header("location:ModifierInauguration.php")
 ?>