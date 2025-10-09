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
        $lines = explode(" ", $line);

        $q = "INSERT INTO tabela_1(identyfikator, imie, nazwisko, email)
            VALUES('{$lines[0]}', '{$lines[1]}', '{$lines[2]}', '{$lines[3]}');";
        mysqli_query($db, $q);
    }

    fclose($file);
    mysqli_close($db);
}
if(isset($_POST["wyswietl"]))
{
    $db = mysqli_connect("localhost","root","","3p_1_pacjenci");

    $q = "SELECT * FROM tabela_1";
    $w = mysqli_query($db, $q);

    echo "<h3>Dane z tabeli:</h3>";
    echo "<table border='1'><tr><th>identyfikator</th><th>Imię</th><th>Nazwisko</th><th>Email</th></tr>";
    while ($row = mysqli_fetch_row($w))
    {
        echo "<tr>";
        echo "<td>" . $row[0] . "</td>";
        echo "<td>" . $row[1] . "</td>";
        echo "<td>" . $row[2] . "</td>";
        echo "<td>" . $row[3] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    mysqli_close($db);
}


?>
</body>
</html>
