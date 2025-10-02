<?php
//Zadanie T60 - początek pracy z bazą danych
//Autor: Fabian Latosiński 3P_1

$db = mysqli_connect("localhost","root","","3i_1_baza1");
$q = "SELECT imie, nazwisko, stanowisko, sekcja FROM pracownicy WHERE sekcja = 'drukarki'";
$wynik = mysqli_query($db, $q);

while($el = mysqli_fetch_row($wynik))
{
    echo $el[0]." ".$el[1]." ".$el[2]." ".$el[3]."<br>";
}

mysqli_close($db);