<?php
$data = "Leonardo Manasali";
$path = "./Archivin.txt";
$file = fopen($path,"a");
fwrite($file,$data."\r\n".date("\D\i\a: d \m\\e\s: m \a\ñ\o: Y \h\o\\r\a: G \m\i\\n i \s\\e\g: s")."\r\n");
fclose($file);
?>