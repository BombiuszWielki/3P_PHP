<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z77 - od mniejszej do większej</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Zadanie Z77 - od mniejszej do większej</h1>
<h2>Autor: Fabian Latosińśki 3P_1</h2>
<p>Napisz program, który dla podanych liczb całkowitych A i B wyświetla liczby od A do B, gdy A < B, lub od B do A, gdy B < A.</p>
<form action="index.php" method="post">
    <label for="a">Podaj A: </label><input type="number" id="a" name="a"><br>
    <label for="b">Podaj B: </label><input type="number" id="b" name="b"><br>
    <input type="submit">
</form>
<div id="res">
    <?php
    if(isset($_POST["a"]) &&  isset($_POST["b"]))
    {
        $a = $_POST["a"];
        $b = $_POST["b"];

        echo "A = $a<br>B = $b<br>";
        if($a<$b)
            for($i=$a; $i<=$b; $i++)
                echo "$i ; ";
        else if($a>$b)
            for($i=$b; $i<=$a; $i++)
                echo "$i ; ";
        else
            echo $a;

    }
    ?>
</div>
</body>
</html>