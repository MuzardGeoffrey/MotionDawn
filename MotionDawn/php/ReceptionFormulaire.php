<?php 
$row=1;
if (($handle = fopen("BD.csv","r"))) {
                        while ($data = fgetcsv($handle, 1000, ",")) {
                            $num = count($data);
                            for ($i = 0; $i < $num; $i++) {
                                echo $data[$i].' ';
                            }
                            echo "</br>";
                            $row++;
                        }echo "</br>";
                        fclose($handle);
                    }
                    else {
                        echo "erreur de chargement";
                    }
?>

