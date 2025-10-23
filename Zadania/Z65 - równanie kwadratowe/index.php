<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z65 - równanie kwadratowe</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Zadanie Z65 - równanie kwadratowe</h1>
<h2>Autor: Fabian Latosiński 3P_1</h2>
<p>Napisz program, który oblicza pierwiastki równania kwadratowego. Program dla danych A, B i C ma sprawdzać czy równanie jest kwadratowe, czy ma jeden czy dwa pierwiastki i czy ma rozwiązanie.</p>
<form action="index.php" method="post">
    <label for="a">Podaj A:</label> <input type="number" name="a" id="a"><br>
    <label for="b">Podaj B:</label> <input type="number" name="b" id="b"><br>
    <label for="c">Podaj C:</label> <input type="number" name="c" id="c"><br>
    <input type="submit">
</form>
<div id="res">
<?php
if(isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["c"]))
{
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];

    if($a == 0)
        echo "parametr a musi być różny od 0!";
    else
    {
        echo "Postać równania f(x) = $a*x<sup>2</sup>+$b*x+$c<br>";

        $delta = $b*$b - 4*$a*$c;

        if($delta<0)
            echo "Brak rozwiązań rzeczywistych";
        else if($delta==0)
        {
            $x = -$b / (2*$a);
            echo "Jedno rozwiązanie rzeczywiste:<br>x<sub>0</sub> = $x";
        }
        else
        {
            $x1 = (-$b + sqrt($delta)) / (2*$a);
            $x2 = (-$b - sqrt($delta)) / (2*$a);
            echo "Dwa rozwiązania rzeczywiste:<br>x<sub>1</sub> = $x1<br>x<sub>2</sub> = $x2";
        }
    }
}
?>
</div>
</body>
</html>