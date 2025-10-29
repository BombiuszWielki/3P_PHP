<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z76 - od A do B</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Zadanie Z76 - od A do B</h1>
<h2>Autor: Fabian Latosiński 3P_1</h2>
<p>Napisz program, który dla podanych liczb całkowitych A i B wyświetla wszystkie liczby całkowite z przedziału od A do B oddzielone średnikami.</p>
<form action="index.php" method="post">
    <label for="a">Podaj A: </label><input type="number" id="a" name="a"><br>
    <label for="b">Podaj B: </label><input type="number" id="b" name="b"><br>
    <input type="submit">
</form>
<div id="res">
    <?php
    if(isset($_POST['a']) && isset($_POST['b']))
    {
        $a = $_POST['a'];
        $b = $_POST['b'];

        echo "A = $a<br>B = $b<br>";
        if($a<=$b)
            for($i=$a; $i<=$b; $i++)
                echo "$i ; ";
        else
            echo "Liczba A musi być mniejsza lub równa liczbie B!";
    }
    ?>
</div>
</body>
</html>