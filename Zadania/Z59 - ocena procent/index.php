<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z59 - ocena procent</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Zadanie Z59 - ocena procent</h1>
<h2>Autor: Fabian Latosiński 3P_1</h2>
<p>Napisz program, który dla podanego wyniku procentowego testów studenckich wystawia ocenę według następującej zasady:<br>
    5 - 90% do 100%<br>
    4,5 - 80% do 89%<br>
    4 - 70% do 79%<br>
    3,5 - 60% do 69%<br>
    3 - 50% do 59%<br>
    2 - poniżej 50%</p>
<form action="index.php" method="post">
    <label for="w">podaj wynik studenta (%): </label><input type="number" id="w" name="w"><br>
    <input type="submit" value="Oblicz">
</form>
<?php
if(isset($_POST["w"]))
{
    $w = $_POST["w"];
    if($w>0 && $w<100)
        switch($w)
        {
            case $w<50:
                echo "Podana wartość to $w.<br>Ocena studenta to 2";
                break;
            case $w<60:
                echo "Podana wartość to $w.<br>Ocena studenta to 3";
                break;
            case $w<70:
                echo "Podana wartość to $w.<br>Ocena studenta to 3.5";
                break;
            case $w<80:
                echo "Podana wartość to $w.<br>Ocena studenta to 4";
                break;
            case $w<90:
                echo "Podana wartość to $w.<br>Ocena studenta to 4.5";
                break;
            default:
                echo "Podana wartość to $w.<br>Ocena studenta to 5";
                break;
        }
    else
        echo "Błędne dane";
}
?>
</body>
</html>