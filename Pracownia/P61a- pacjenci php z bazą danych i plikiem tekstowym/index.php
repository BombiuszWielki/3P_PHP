<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h1>Zadanie P61a- pacjenci php z bazą danych i plikiem tekstowym</h1>
<h2>Autor: Fabian Latosiński 3P_1</h2>
<form action="index.php" method="post">
    <input type="submit" name="zaladuj" value="Załaduj dane">
    <input type="submit" name="wyswietl" value="Wyświetl dane">
</form>
<?php
if(isset($_POST["zaladuj"]))
{
    $db = mysqli_connect("localhost","root","","3p_1_pacjenci");
    $file = fopen("dane.txt", "r");

    while(!feof($file))
    {
        $line = fgets($file);
        $lines = trim($line, " ");

        $q = "INSERT INTO tabela_1(identyfikator, imie, nazwisko, email)
            VALUES(${$lines[0]}, ${$lines[1]}, ${$lines[2]}, ${$lines[3]});";
        mysqli_query($db, $q);
    }

    fclose($file);
    mysqli_close($db);
}
if(isset($_POST["wyswietl"]))
{
    $db = mysqli_connect("localhost","root","","3p_1_pacjenci");
    $file = fopen("dane.txt", "r");

    $q = "SELECT * FROM tabela_1";
    $w = mysqli_query($db, $q);

    echo "<h3>Dane z tabeli:</h3>";
    echo "<table><tr><th>identyfikator</th><th>Imię</th><th>Nazwisko</th><th>Email<th></tr></table>";
    echo"<table>";
    while ($row = mysqli_fetch_assoc($w))
    {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($w['identyfikator']) . "</td>";
        echo "<td>" . htmlspecialchars($w['imie']) . "</td>";
        echo "<td>" . htmlspecialchars($w['nazwisko']) . "</td>";
        echo "<td>" . htmlspecialchars($w['email']) . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    fclose($file);
    mysqli_close($db);
}


?>
</body>
</html>
