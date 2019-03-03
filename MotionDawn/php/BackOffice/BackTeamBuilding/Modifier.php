<?php


$list = ["Decalage"];
$Destination = "img/";

if (($handle = fopen("TeamBuilding.csv","r"))) {
    while ($data = fgetcsv($handle, 1024, ";")) {


		echo "<pre>";
			var_dump($_POST['formulaire'. 1]);
		echo "<pre>";
		echo "<pre>";
			var_dump($_FILES['formulaire'. 3 ]['name']);
		echo "<pre>";
		echo "<pre>";
			var_dump($_FILES['formulaire'. 3 ]['tmp_name']);
		echo "<pre>";
		echo "<pre>";
			var_dump($data);
		echo "<pre>";

		array_push($list, $_POST["formulaire". 1]);
		array_push($list, $_POST["formulaire". 2]);


		if (strlen($_FILES['formulaire'. 3 ]['name']) > 0){

			$Image = $_FILES['formulaire'. 3];
			array_push($list, $Destination.$_FILES['formulaire'. 3]['name']);
			move_uploaded_file($Image["tmp_name"],"../../".$Destination.$_FILES['formulaire'. 3 ]['name']);;

			echo "test1";
			
		}else{

			array_push($list, $data[3]);
			echo "test2";

		}

	}

echo "<pre>";
	var_dump($list);
echo "<pre>";

$fp = fopen('TeamBuilding.csv','w');
fprintf($fp, chr(0xEF).chr(0xBB).chr(0xbf));
fputcsv($fp,$list,';');
fclose($fp);
}

header("location:BackTeamBuilding.php");
?>
