<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z78 - litery</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Zadanie Z78 - litery</h1>
<h2>Autor: Fabian Latosiński 3P_1</h2>
<p>Napisz program, który odczytuje dwie wartości będące dużymi literami alfabetu angielskiego i wypisuje litery od pierwszej do drugiej.</p>
<form action="index.php" method="post">
    <label for="z1">Pierwszy znak (A-Z): </label><input type="text" id="z1" name="z1"><br>
    <label for="z2">Drugi znak (A-Z): </label><input type="text" id="z2" name="z2"><br>
    <input type="submit">
</form>
<div id="res">
    <?php
    if (isset($_POST['z1']) && isset($_POST['z2']))
    {
        $litery = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I',  'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T',  'U', 'V', 'W', 'X', 'Y', 'Z');
        $z1 = $_POST['z1'];
        $z2 = $_POST['z2'];
        $i1 = 0;
        $i2 = 0;

        echo "Pierwszy znak: $z1<br>Drugi znak: $z2<br>";

        while($z1 != $litery[$i1])
            $i1++;
        while($z2 != $litery[$i2])
            $i2++;

        if($i1 == $i2)
            echo "$litery[$i1]";
        elseif($i1>$i2)
            echo "Błąd: pierwsza litera musi być pierwsza alfabetycznie.";
        else
            for($i = $i1; $i <= $i2; $i++)
                echo "$litery[$i], ";
    }
    ?>
</div>
</body>
</html>
