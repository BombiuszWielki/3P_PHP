<?php
$filename = 'imiona.txt';

$imiona = file($filename);

echo "<h2>Imiona w kolejności zapisania:</h2>";
echo "<ul>";
foreach ($imiona as $imie)
    echo "<li>" . htmlspecialchars($imie) . "</li>";
echo "</ul>";

echo "<h2>Imiona w kolejności odwrotnej:</h2>";
echo "<ul>";
$imiona_odwrocone = array_reverse($imiona);
foreach ($imiona_odwrocone as $imie)
    echo "<li>" . htmlspecialchars($imie) . "</li>";
echo "</ul>";