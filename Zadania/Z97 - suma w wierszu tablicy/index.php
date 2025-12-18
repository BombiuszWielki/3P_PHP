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
        $n_ = $_POST['n'];
        $m_ = $_POST['m'];
        $liwier_ = $_POST['liwier'];
        $liczby = array_map('trim', explode(',', $_POST['liczby']));

        $walidacja_ok = true;

        if((!ctype_digit($n_) || (int)$n_ <= 0) || (!ctype_digit($m_) || (int)$m_ <= 0) || !ctype_digit($liwier_))
        {
            echo "Wszystkie dane muszą być liczbami całkowitymi dodatnimi<br>";
            $walidacja_ok = false;
        }

        if($walidacja_ok)
        {
            $n = intval($n_);
            $m = intval($m_);
            $liwier = (int)$liwier_;
            $ileTrzebaLiczb = $n * $m;

            if($liwier < 0 || $liwier >= $n)
            {
                echo "Numer wiersza musi być w zakresie od 0 do " . ($n - 1) . ".<br>";
                $walidacja_ok = false;
            }

            $liczba_elementow = count($liczby);
            if($liczba_elementow != $ileTrzebaLiczb) {
                echo "Podano $liczba_elementow elementów, wymagane jest $ileTrzebaLiczb.<br>";
                $walidacja_ok = false;
            }

            $tablica = array();
            $indeksLichy = 0;
            $wszystkie_liczby = true;

            if($walidacja_ok)
            {
                for($i = 0; $i < $n; $i++)
                {
                    $tablica[$i] = array();
                    for($j = 0; $j < $m; $j++)
                    {
                        $element = $liczby[$indeksLichy];
                        if(!is_numeric($element))
                        {
                            echo "Element '$element' nie jest poprawną liczbą.<br>";
                            $wszystkie_liczby = false;
                            break 2;
                        }
                        $tablica[$i][$j] = floatval($element);
                        $indeksLichy++;
                    }
                }

                if($wszystkie_liczby)
                {
                    echo "Wymiary tablicy: $n x $m<br>";
                    echo "Wybrany wiersz: $liwier<br>";

                    echo "<p>Tablica wejściowa ($n x $m):</p>";
                    echo "<table border='1'>";
                    for($i = 0; $i < $n; $i++)
                    {
                        echo "<tr>";
                        for($j = 0; $j < $m; $j++)
                        {
                            $wartosc = $tablica[$i][$j];
                            echo "<td>" . (is_float($wartosc) ? number_format($wartosc, 2) : $wartosc) . "</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";

                    $suma = 0;
                    for ($j = 0; $j < $m; $j++) {
                        $suma += $tablica[$liwier][$j];
                    }

                    echo "Suma wartości w wierszu $liwier wynosi: " . number_format($suma, 2) . "<br>";
                }
            }
        }
    }
    ?>
</div>
</body>
</html>