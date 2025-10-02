<?php
//POTRZEBA: imie i nazwisko wszystkich Janów

$db = mysqli_connect("localhost", "root", "", "3i_1_baza1");
$q = "SELECT imie, nazwisko FROM pracownicy WHERE imie = 'Jan'";
$wynik = mysqli_query($db, $q);

while($el = mysqli_fetch_row($wynik))
{
    echo $el[0]." ".$el[1]."<br>";
}

mysqli_close($db);