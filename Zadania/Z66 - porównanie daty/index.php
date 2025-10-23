<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z66 - porównanie daty</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Zadanie Z66 - porównanie daty</h1>
<h2>Autor: Fabian Latosiński 3P_1</h2>
<p>Napisz program, który dla dat o postaci dzien1, miesiac1, rok1 oraz dzien2, miesiac2, rok2 określi, która z nich jest wcześniejsza. Program powinien przyjmować dane z formularza, weryfikować ich poprawność (np. czy dzień i miesiąc tworzą istniejącą datę) i wyświetlać obie daty oraz wynik porównania w czytelny sposób</p>
<form action="index.php" method="post">
    <h3>Pierwsza data:</h3>
    <label for="d1">Dzień: </label><input type="number" name="d1" id="d1"><br>
    <label for="m1">Miesiąc: </label><input type="number" name="m1" id="m1"><br>
    <label for="y1">Rok: </label><input type="number" name="y1" id="y1"><br>
    <h3>Druga data:</h3>
    <label for="d2">Dzień: </label><input type="number" name="d2" id="d2"><br>
    <label for="m2">Miesiąc: </label><input type="number" name="m2" id="m2"><br>
    <label for="y2">Rok: </label><input type="number" name="y2" id="y2"><br>

    <input type="submit">
</form>
<div id="res">
<?php
if(isset($_POST["d1"]) && isset($_POST["m1"]) && isset($_POST["y1"]) && isset($_POST["d2"]) && isset($_POST["m2"]) && isset($_POST["y2"]))
{
    $d1=$_POST["d1"];
    $m1=$_POST["m1"];
    $y1=$_POST["y1"];
    $d2=$_POST["d2"];
    $m2=$_POST["m2"];
    $y2=$_POST["y2"];

    if(checkdate($d1,$m1,$y1) && checkdate($d2,$m2,$y2))
    {
        $p1 = mktime(0,0,0, $m1,$d1,$y1);
        $p2 = mktime(0,0,0, $m2,$d2,$y2);

        if($p1 < $p2)
            echo "Data 1 ($d1-$m1-$y1) jest wcześniejsza";
        elseif($p1 > $p2)
            echo "Data 2 ($d2-$m2-$y2) jest wcześniejsza";
    }
    else
    {
        echo "Błędne dane :(";
    }
}
?>
</div>
</body>
</html>