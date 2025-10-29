<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z75a - liczby Fibonacciego_iter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Zadanie Z75a - liczby Fibonacciego_iter</h1>
<h2>Autor: Fabian Latosiński 3P_1</h2>
<p>Napisz program, który dla danej liczby całkowitej n wypisuje wyrazy ciągu Fibonacciego według zależności</p>
<img src="fibizbigi.png" alt="Fibonacci">
<p>Dla n= 20 program powinien wypisać: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233, 377, 610, 987, 1597, 2584, 4181, 6765</p>
<form action="index.php" method="post">
    <label for="n">Podaj liczbę n: </label><input type="number" id="n" name="n"><br>
    <input type="submit">
</form>
<div id="res">
    <?php
    if(isset($_POST['n']))
    {
        $n = $_POST['n'];
        $x1 = 0;
        $x2 = 1;

        echo "F(0) = 0<br>";
        echo "F(1) = 1<br>";
        for($i=1; $i<=$n; $i++)
        {
            echo "F($i) = $x2<br>";
            $x1 = $x2+$x1;
            $x2 = $x1+$x2;
        }
    }
    ?>
</div>
</body>
</html>