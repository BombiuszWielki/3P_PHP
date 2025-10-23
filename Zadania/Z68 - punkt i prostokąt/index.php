<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z68 - punkt i prostokąt</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Zadanie Z68 - punkt i prostokąt</h1>
<h2>Autor: Fabian Latosiński 3P_1</h2>
<p>
    Napisz program, który określi położenie punktu o współrzędnych (x, y) względem prostokąta wyznaczonego przez proste X=A, X=B, Y=C, Y=D, gdzie A<B i C<D. Program powinien przyjmować dane z formularza (współrzędne punktu oraz parametry prostokąta), weryfikować, czy są to liczby oraz czy A<B i C<D, a następnie wyświetlać dane wejściowe i wynik analizy w czytelny sposób (np. czy punkt leży wewnątrz, na krawędzi czy na zewnątrz prostokąta).</p>
<form action="index.php" method="post">
    <h3>Współrzędne punktu:</h3>
    <label for="x">x: </label><input type="number" name="x" id="x"><br>
    <label for="y">y: </label><input type="number" name="y" id="y"><br>
    <h3>Parametry prostokąta (X=A, X=B, Y=C, Y=D):</h3>
    <label for="a">A: </label><input type="number" id="a" name="a"><br>
    <label for="b">B: </label><input type="number" id="b" name="b"><br>
    <label for="c">C: </label><input type="number" id="c" name="c"><br>
    <label for="d">D: </label><input type="number" id="d" name="d"><br>
    <input type="submit" value="Prześlij">
</form>
<div id="res">
<?php
if(isset($_POST["x"]) && isset($_POST["y"]) && isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["c"]) && isset($_POST["d"]))
{
    $x = $_POST["x"];
    $y = $_POST["y"];
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    $d = $_POST["d"];

    if($a<$b && $c<$d)
    {
        if($a<=$x && $x<=$b && $c<=$y && $y<=$d)
        {
            if($a==$x || $b==$x || $c==$y || $d==$y)
                echo "Punkt znajduje się na krawędzi prostokąta";
            else
                echo "Punkt znajduje się w środku prostokąta";
        }
        else
            echo "Punkt znajduje się poza prostokątem";
    }
    else
        echo "A musi być mniejsze od B, a C musi być mniejsze od D";
}
?>
</div>
</body>
</html>