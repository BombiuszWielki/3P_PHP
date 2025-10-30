<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z80 - piramida</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Zadanie Z80 - piramida</h1>
<h2>Autor: Fabian Latosiński 3P_1</h2>
<p>Napisz program, który dla podanej liczby całkowitej A wyświetla piramidę znaków | o ilości wierszy równej A (maksymalna dopuszczalna wartość A = 50).</p>
<form action="index.php" method="post">
    <label for="a">Podaj liczbę A: </label><input type="number" id="a" name="a"><br>
    <input type="submit">
</form>
<div id="res">
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $a = $_POST['a'];

        if($a>=1 && $a<=50)
            for($i=1;$i<=$a;$i++)
            {
                for($j=1;$j<=$i;$j++)
                    echo "|";
                echo "<br>";
            }
        else
            echo "Liczba musi być w zakresie 1-50.";
    }
    ?>
</div>
</body>
</html>