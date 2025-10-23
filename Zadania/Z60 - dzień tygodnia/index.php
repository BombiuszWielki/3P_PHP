<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z60 - dzień tygodnia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Zadanie Z60 - dzień tygodnia</h1>
<h2>Autor: Fabian Latosiński 3P_1</h2>
<p>Napisz program, który dla podanej liczby całkowitej z przedziału od 1 do 7 wypisuje jaki to dzień tygodnia. Zakładamy, że 1 to poniedziałek. W przypadku liczby z poza zakresu należy wyświetlić informację o błędzie.</p>
<form action="index.php" method="post">
    <label for="nrDnia">Podaj liczbę całkowitą: </label><input type="number" name="nrDnia" id="nrDnia">
    <input type="submit">
</form>
<div id="res">
<?php
if(isset($_POST["nrDnia"]))
{
    $nrDnia = $_POST["nrDnia"];

    echo "Podana liczba to $nrDnia<br>";
    switch($nrDnia)
    {
        case 1:
            echo "Nazwa dnia tygodnia: poniedziałek";
            break;
        case 2:
            echo "Nazwa dnia tygodnia: wtorek";
            break;
        case 3:
            echo "Nazwa dnia tygodnia: środa";
            break;
        case 4:
            echo "Nazwa dnia tygodnia: czwartek";
            break;
        case 5:
            echo "Nazwa dnia tygodnia: piątek";
            break;
        case 6:
            echo "Nazwa dnia tygodnia: sobota";
            break;
        case 7:
            echo "Nazwa dnia tygodnia: niedziela";
            break;
        default:
            echo "Błędne dane :(";
    }
}
?>
</div>
</body>
</html>