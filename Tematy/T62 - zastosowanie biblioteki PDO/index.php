<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T62 - zastosowanie biblioteki PDO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Zadanie T62 - zastosowanie biblioteki PDO</h1>
<h2>Autor: Fabian Latosiński 3P_1</h2>
<p>Utwórz podobnie jak w ćwiczeniu 6.29 (z podręcznika) skrypt, który dane pobrane z formularza będzie dodawał w bazie 3p1_biblioteka (zaimportuj ją z załączonego pliku biblioteka.sql) do tabeli autorzy. W skrypcie zastosuj polecenia mysqli zorientowanego obiektowo.</p>
<form action="index.php" method="post">
    <label for="imie">Imię: </label><br><input type="text" name="imie" id="imie"><br>
    <label for="nazwisko">Nazwisko: </label><br><input type="text" name="nazwisko" id="nazwisko"><br>
    <input type="submit">
</form>
<?php
if(isset($_POST["imie"]) && isset($_POST["nazwisko"]))
{
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $q = "INSERT INTO autorzy(id, imie, nazwisko) VALUES (11, '$imie', '$nazwisko');";

//    $db = new mysqli("localhost", "root", "", "3p1_biblioteka");
//    $db->query($q);
//
//    $db->close();

    $d = new PDO("mysql:host=localhost;dbname=3p1_biblioteka", "root", "");
    $d->query($q);

    $d = null;
    //Dodano autora: Zygmunt Lewicki
}
?>
</body>
</html>