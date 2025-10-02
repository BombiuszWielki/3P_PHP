<?php
//Zadanie T60 - początek pracy z bazą danych
//Autor: Fabian Latosiński 3P_1

$db = mysqli_connect("localhost","root","","3i_1_baza1");
$q = "SELECT imie, nazwisko, stanowisko, sekcja FROM pracownicy WHERE sekcja = 'drukarki'";
$wynik = mysqli_query($db, $q);

echo "<ol>";
while($el = mysqli_fetch_row($wynik))
{
    echo "<li><b>Imię: </b>".$el[0]." "."<b>Nazwisko: </b>".$el[1]." "."<b>Stanowisko: </b>".$el[2]." "."<b>Sekcja: </b>".$el[3]."<br></li>";
}
echo "</ol>";

mysqli_close($db);