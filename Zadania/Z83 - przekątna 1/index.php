<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z83 - przekątna 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Zadanie Z83 - przekątna 1</h1>
<h2>Autor: Fabian Latosiński 3P_1</h2>
<p>Napisz program, który dla podanej liczby całkowitej A oznaczającej ilość znaków w wierszu wyświetla następujący blok znaków.</p>
<p> Przykład:<br>
    A=5<br>
    10000<br>
    01000<br>
    00100<br>
    00010<br>
    00001</p>
<form action="index.php" method="post">
    <label for="a">Podaj A: </label><input type="number" id="a" name="a"><br>
    <input type="submit">
</form>
<div id="res">
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $a = $_POST['a'];

        if($a>=1)
        {
            for($i=0; $i<$a; $i++)
            {
                for($j=0; $j<$a; $j++)
                {
                    if($i==$j)
                        echo "<strong>1</strong>";
                    else
                        echo "0";
                }
                echo "<br>";
            }
        }
    }
    ?>
</div>
</body>
</html>