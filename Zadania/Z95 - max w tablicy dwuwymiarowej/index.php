<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z95 - max w tab dwuwymiarowej</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Zadanie Z95 - max w tab. dwuwymiarowej</h1>
<h2>Autor: Fabian Latosiński 3P_1</h2>
<p>Napisz program, który wczytuje liczby całkowite do tablicy o wymiarach n x m, wyświetla tę tablicę i wyświetla maksymalną wartość zapisaną w tablicy. Użytkownik podaje n i m oraz wprowadza liczby do komponentu textarea oddzielone przecinkami. Program powinien zweryfikować, czy n i m są liczbami całkowitymi, czy podane wartości są liczbami całkowitymi, oraz czy ich liczba zgadza się z n x m, a następnie wyświetlić tablicę w czytelny sposób wraz z maksymalną wartością.</p>
<form action="index.php" method="post">
    <label for="n">Liczba wierszy (n): </label><input type="number" id="n" name="n"><br>
    <label for="m">Liczba kolumn (m): </label><input type="number" id="m" name="m"><br>
    <label for="liczby">Wartości tablicy (liczby całkowite oddzielone przecinkami): </label><textarea id="liczby" name="liczby" placeholder="np. 1, 2, 3, 4" cols="20" rows="20"></textarea><br>
    <input type="submit">
</form>
<div id="res">
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $n = $_POST['n'];
        $m = $_POST['m'];
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

            if($n > 0 && $n < 100 && $m > 0 && $m < 100)
            {
                for ($i = 0; $i < sizeof($liczby); $i++)
                    if (!is_numeric($liczby[$i]))
                    {
                        $liSieZgadzaja = false;
                        break;
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
                        $max = -1;
                        for($i = 0; $i < $m; $i++)
                        {
                            for ($j = 0; $j < $n; $j++)
                            {
                                echo $liczby[$x]." ";
                                if($liczby[$x]>$max)
                                    $max = $liczby[$x];
                                $x++;
                            }
                            echo "<br>";
                        }
                        echo "Maksymalna wartość w tablicy: $max<br>";
                    }
                }
            }
        }
    }
    ?>
</div>
</body>
</html>