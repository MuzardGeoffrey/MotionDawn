<?php
$i = 1;
$list[] = "decalage";
while (isset($_POST['formulaire'.$i]))  {
	$list[] = $_POST['formulaire'.$i];
	$i++;
}
echo "<pre>";
	var_dump($list);
echo "<pre>";
$fp = fopen('Entreprise.csv','w');
fprintf($fp, chr(0xEF).chr(0xBB).chr(0xbf));
fputcsv($fp,$list,';');
fclose($fp);
header("location:BackEntreprise.php");
?>