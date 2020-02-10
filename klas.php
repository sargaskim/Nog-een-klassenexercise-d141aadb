<?php

$computter1 = "Wie zit er in de klas?".PHP_EOL;
$computter2 = "De studenten in de klas zijn:".PHP_EOL;
$klas = array();

echo $computter1;
$namen = readline("");
$klas = explode(" ", $namen);

echo $computter2;
foreach ($klas as $namen => $naam){ 
echo $naam.PHP_EOL;
}



?>