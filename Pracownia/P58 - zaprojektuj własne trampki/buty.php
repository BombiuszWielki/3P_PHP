<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Podsumowanie projektu butów</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    echo "<h1>Podsumowanie projektu butów</h1>";
    echo "<h2>Dane użytkownika</h2>";

    $imie = $_POST["imie"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $opis = $_POST["opis"];

    echo "<strong>Imię i nazwisko:</strong> $imie<br>";
    echo "<strong>E-mail:</strong> $email<br>";
    echo "<strong>Telefon:</strong> $tel<br>";
    echo "<strong>Opis:</strong> <br>$opis";

    echo "<h2>Projekt butów</h2>";

    $kolor1 = $_POST['kolor1'];
    echo "<strong>Kolor główny:</strong> $kolor1<br>";

    $kolor2 = $_POST['kolor2'];
    echo "<strong>Kolor dopełniający:</strong> <span style='background-color: $kolor2;'>$kolor2</span><br>";

    echo "<strong>Opcje:</strong> ";
    if (isset($_POST['opcje']) && is_array($_POST['opcje']) && count($_POST['opcje']) > 0)
    {
        echo "<ul>";

        foreach ($_POST['opcje'] as $opcja)
            echo "<li>$opcja</li>";

        echo "</ul><br>";
    }
    else
        echo "Brak zaznaczonych opcji.<br>";

    $rozmiar = $_POST['rozmiar'];
    echo "<strong>Rozmiar:</strong> $rozmiar<br>";
}
?>
</body>
</html>