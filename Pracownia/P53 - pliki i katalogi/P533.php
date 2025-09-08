<?php

$filename = 'imiona.txt';

$imiona = file($filename);

foreach ($imiona as $imie)
    echo htmlspecialchars($imie);
echo "<br>";
$imiona_odwrocone = array_reverse($imiona);
foreach ($imiona_odwrocone as $imie)
    echo htmlspecialchars($imie);