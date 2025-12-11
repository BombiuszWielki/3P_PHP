<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z97 - suma w wierszu tablicy</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Zadanie Z97 - suma w wierszu tablicy</h1>
<h2>Autor: Fabian Latosiński 3P_1</h2>
<p>Napisz program, który wczytuje liczby do tablicy o wymiarach n x m i oblicza sumę wartości we wskazanym wierszu. Numer wiersza podaje użytkownik (numerowanie od 0). Użytkownik wprowadza n, m, liczby do komponentu textarea oddzielone przecinkami oraz numer wiersza. Program powinien zweryfikować, czy n, m i numer wiersza są liczbami całkowitymi, czy podane wartości są liczbami, czy ich liczba zgadza się z n x m, a następnie wyświetlić tablicę i sumę wartości w wybranym wierszu.</p>
<form action="index.php" method="post">
    <label for="n">Liczba wierszy (n): </label><input type="number" id="n" name="n"><br>
    <label for="m">Liczba kolumn (m): </label><input type="number" id="m" name="m"><br>
    <label for="liwier">Numer wiersza (0 do n-1): </label><input type="number" id="liwier" name="liwier"><br>
    <label for="liczby">Wartości tablicy (liczby całkowite oddzielone przecinkami): </label><textarea id="liczby" name="liczby" placeholder="np. 1, 2, 3, 4" cols="20" rows="20"></textarea><br>
    <input type="submit">
</form>
<div id="res">
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $n = $_POST['n'];
        $m = $_POST['m'];
        $liwier = $_POST['liwier'];
        $liczby = explode(',', $_POST['liczby']);

        if(is_numeric($n))
        {
            echo "Wymiary tablicy: $n x $m<br>";
            echo "Wprowadzane liczby: ";
            for ($i = 0; $i < sizeof($liczby); $i++)
                echo $liczby[$i] . ", ";
            echo "<br>";
            $n = intval($n);
            $m = intval($m);
            $liSieZgadzaja = true;

            if($liwier>=0 && $liwier<$n)
            {
                for ($i = 0; $i < sizeof($liczby); $i++)
                    if (!is_numeric($liczby[$i]))
                    {
                        $liSieZgadzaja = false;
                        break;
                    }

                $lichoczby = array();
                static $y = 0;
                for ($i = 0; $i < $n; $i++)
                {
                    for ($j = 0; $j < $m; $j++)
                    {
                        $lichoczby[$n][$m] = $liczby[$y];
                        $y++;
                    }
                }

                if(!$liSieZgadzaja)
                    echo "Wpisano niepoprawne wartości.\n";
                else
                {
                    if(count($liczby) !== $n*$m)
                        echo "Błędna ilość elementów.\n";
                    else
                    {
                        echo "Tablica $n x $m:<br>";
                        static $x = 0;

                        echo "<table border='1'>";
                        for($i = 0; $i < $m; $i++)
                        {
                            echo "<tr>";
                            for ($j = 0; $j < $n; $j++)
                            {
                                echo "<td>$liczby[$x]</td>";
                                $x++;
                            }
                            echo "</tr>";
                        }
                        echo "</table>";

                        $suma = 0;
                        for($i = 0; $i < $m; $i++)
                            $suma += $lichoczby[$i][$liwier];

                        echo "Suma wartości w wierszu $liwier: $suma";
                    }
                }
            }
            else
                echo "Numer wiersza musi być w zakresie 0 do n-1";
        }
    }
    ?>
</div>
</body>
</html>