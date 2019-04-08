<?php
$path = "./Archivin.txt";
$file = fopen($path,"r");
$datos = fread($file,filesize($path));
echo str_replace("\\r\\n","<br>",$datos);
fclose($file);
?>
