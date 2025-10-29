<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z74 - ułamki i piętra</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Zadanie Z74 - ułamki i piętra</h1>
<h2>Autor: Fabian Latosiński 3P_1</h2>
<p>Napisz program, który dla danej liczby całkowitej N wyświetla ciąg liczb w postaci ułamka zwykłego i dziesiętnego, prezentując wynik w specyficzny sposób. Na przykład dla N=3 program powinien wyświetlić:<br>
    Piętro 1 > 1/1 - 1.000000<br>
    Piętro 2 > > 1/2 - 0.500000<br>
    Piętro 3 > > > 1/3 - 0.333333<br>
    > > > > Koniec wspinaczki wracamy < < < <<br>
    Piętro 3 > > ><br>
    Piętro 2 > ><br>
    Piętro 1 ><br>
    Program powinien przyjmować N z formularza i weryfikować, czy jest to liczba całkowita dodatnia.</p>
<form action="index.php" method="post">
    <label for="n">Liczba pięter (N): </label><input type="number" id="n" name="n"><br>
    <input type="submit">
</form>
<div id="res">
    <?php
    if (isset($_POST['n']))
    {
        $n = $_POST['n'];

        if($n>0)
        {
            //Piętra
            for($i=1; $i<=$n;$i++)
            {
                $w = 1/$i;
                $s = "";
                for($j=1; $j<=$i; $j++)
                    $s .= ">";

                echo "Piętro $i $s 1/$i - $w<br>";
            }

            //Koniec
            $ileTego = "";
            for($i=1; $i<$n;$i++)
                $ileTego .= ">";
            echo "$ileTego Koniec wspinaczki wracamy <<< <br>";

            //Powrót
            for($i=$n; $i>=1;$i--)
            {
                $s = "";
                for($j=1; $j<=$i;$j++)
                    $s .= ">";
                echo "Piętro $i $s<br>";
            }
        }
        else
            echo "N musi być dodatnie!";
    }
    ?>
</div>
</body>
</html>