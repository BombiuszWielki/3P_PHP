<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>P61b - Praca z bazą danych wygenerowaną na stronie w kolorze</title>
</head>
<body>
<h1>Zadanie P61b - Praca z bazą danych wygenerowaną na stronie w kolorze</h1>
<h2>Autor: Fabian Latosiński 3P_1</h2>
<?php
$db = mysqli_connect("localhost", "root", "", "3p_01_pracownicy_w_kolorze");
$q = "SELECT * FROM 3p_01_pracownicy_w_kolorze";
$w = mysqli_query($db, $q);

echo "<table border='1'><tr><th>id</th><th>first_name</th><th>last_name</th><th>email</th><th>gender</th><th>ip_address</th><th>color</th></tr>";
while($row = mysqli_fetch_row($w))
{
    echo "<tr style='background-color: $row[6]'>";
    echo "<td>" . $row[0] . "</td>";
    echo "<td>" . $row[1] . "</td>";
    echo "<td>" . $row[2] . "</td>";
    echo "<td>" . $row[3] . "</td>";
    echo "<td>" . $row[4] . "</td>";
    echo "<td>" . $row[5] . "</td>";
    echo "<td>" . $row[6] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>

