<?php
$nombreCompleto = "Leonardo Manassali";
$file = fopen("./Archivin.txt","w");
fwrite( $file,$nombreCompleto);
fclose($file);
?>