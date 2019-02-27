<?php

$i = 1;
$list = ["Decalage"];
$Destination = "../img/";

while (isset($_POST['formulaire'.$i]) || isset($_FILES['formulaire'.$i]))  {


	echo "<pre>";
		var_dump($_POST['formulaire'.$i]);
	echo "<pre>";
	echo "<pre>";
		var_dump($_FILES['formulaire'.$i]['name']);
	echo "<pre>";
	echo "<pre>";
		var_dump($_FILES['formulaire'.$i]['tmp_name']);
	echo "<pre>";


	if (isset($_FILES['formulaire'.$i])){

		$Image = $_FILES['formulaire'.$i];
		array_push($list, $Destination.$_FILES['formulaire'.$i]['name']);
		move_uploaded_file($Image["tmp_name"],$Destination.$_FILES['formulaire'.$i]['name']);

	}elseif (isset($_POST['formulaire'.$i])) {

		array_push($list, $_POST["formulaire".$i]);
		
	}else{

	}
	$i++;

echo "<pre>";
	var_dump($list);
echo "<pre>";

$fp = fopen('Inauguration.csv','w');
fprintf($fp, chr(0xEF).chr(0xBB).chr(0xbf));
fputcsv($fp,$list,';');
fclose($fp);
}

header("location:BackInauguration.php");
?>
