<?php
$list[] = "decalage";

	$list[] = $_POST['formulaire1'];
echo "<pre>";
	var_dump($list);
echo "<pre>";
$fp = fopen('Entreprise.csv','w');
fprintf($fp, chr(0xEF).chr(0xBB).chr(0xbf));
fputcsv($fp,$list,';');
fclose($fp);
header("location:BackEntreprise.php");
?>