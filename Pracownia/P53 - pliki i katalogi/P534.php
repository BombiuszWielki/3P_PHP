<?php
$plik = 'napisy.txt';
$bludek = fopen($plik, 'r');
$numerLiczby = 1;

while (($linia = fgets($bludek)) !== false)
{
    $linia = trim($linia);

    if (!empty($linia) && preg_match('/^[01]+$/', $linia))
    {
        $liczbaDziesietna = bindec($linia);

        echo "Nr {$numerLiczby} – {$linia} – {$liczbaDziesietna}<br>";
        $numerLiczby++;
    }
}
fclose($bludek);