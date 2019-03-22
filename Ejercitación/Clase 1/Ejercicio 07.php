<?php

echo "Hoy es " . date("d \d\\e F \d\\e\l Y \a \l\a\s H:i:s \h\s\.") . "<br/>";
echo date("c") . "<br/>";

if (date("n") <= 3) {
    echo "Es verano.";
} else if (date("n") <= 6) {
    echo "Es otoño.";
} else if (date("n") <= 9) {
    echo "Es invierno";
} else {
    echo "Es primavera";
}
?>