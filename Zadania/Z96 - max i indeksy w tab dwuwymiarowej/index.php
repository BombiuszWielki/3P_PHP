<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z96 - max i indeksy w tab. dwuwymiarowej</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Zadanie Z95 - max w tab. dwuwymiarowej</h1>
<h2>Autor: Fabian Latosiński 3P_1</h2>
<p>Napisz program, który wczytuje liczby całkowite do tablicy o wymiarach n x m, wyświetla tę tablicę, wyświetla maksymalną wartość zapisaną w tablicy oraz wskaźniki elementów zawierających tę maksymalną wartość. Użytkownik podaje n i m oraz wprowadza liczby do komponentu textarea oddzielone przecinkami. Program powinien zweryfikować, czy n i m są liczbami całkowitymi, czy podane wartości są liczbami całkowitymi, oraz czy ich liczba zgadza się z n x m, a następnie wyświetlić tablicę, maksymalną wartość i indeksy elementów o tej wartości.</p>
<form action="index.php" method="post">
    <label for="n">Liczba wierszy (n): </label><input type="number" id="n" name="n"><br>
    <label for="m">Liczba kolumn (m): </label><input type="number" id="m" name="m"><br>
    <label for="liczby">Wartości tablicy (liczby całkowite oddzielone przecinkami): </label><textarea id="liczby" name="liczby" placeholder="np. 1, 2, 3, 4" cols="20" rows="20"></textarea><br>
    <input type="submit">
</form>
<div id="res">
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $n = $_POST['n'];
        $m = $_POST['m'];
        $liczby_ = $_POST['liczby'];

        if (!is_numeric($n) || !is_numeric($m))
            echo "Wymiary n i m muszą być dodatnimi liczbami całkowitymi.";
        else
        {
            $liczby = explode(',', $liczby_);
            $liczby = array_map('trim', $liczby);
            $liczby = array_filter($liczby, 'strlen');

            $dlugoscLi = count($liczby);
            $razemIle = $n * $m;
            $liSieZgadzaja = true;

            foreach ($liczby as $key => $wartosc)
            {
                if (filter_var($wartosc, FILTER_VALIDATE_INT) === false)
                {
                    $liSieZgadzaja = false;
                    break;
                }
                $liczby[$key] = (int)$wartosc;
            }

            if (!$liSieZgadzaja)
                echo "Wszystkie podane wartości muszą być liczbami całkowitymi.";
            else if ($dlugoscLi != $razemIle)
                echo "Błędna ilość elementów. Oczekiwano $razemIle, otrzymano $dlugoscLi.";
            else
            {
                echo "<p> Wyniki dla tablicy $n x $m:</p>";

                $tabelaLi = array();
                $indeksLi = 0;
                $max = -999;
                $IndeksyMax = array();

                echo "<table border='1'>";

                for ($i = 0; $i < $n; $i++)
                {
                    echo "<tr>";
                    for ($j = 0; $j < $m; $j++)
                    {
                        $wartosc = $liczby[$indeksLi];
                        $tabelaLi[$i][$j] = $wartosc;

                        if ($wartosc > $max)
                        {
                            $max = $wartosc;
                            $IndeksyMax = array();
                            $IndeksyMax[] = "[$i, $j]";
                        }
                        elseif ($wartosc == $max)
                            $IndeksyMax[] = "[$i, $j]";

                        echo "<td>" . htmlspecialchars($wartosc) . "</td>";

                        $indeksLi++;
                    }
                    echo "</tr>";
                }
                echo "</table>";

                echo "<p>Maksymalna wartość w tablicy: <strong>$max</strong></p>";
                echo "<p>Indeksy elementów o maksymalnej wartości: <strong>" . implode(', ', $IndeksyMax) . "</strong></p>";
            }
        }
    }
    ?>
</div>
</body>
</html>