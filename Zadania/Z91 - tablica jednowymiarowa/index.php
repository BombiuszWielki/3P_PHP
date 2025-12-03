<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z91 - tablica jednowymiarowa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Zadanie Z91 - tablica jednowymiarowa</h1>
<h2>Autor: Fabian Latosiński 3P_1</h2>
<p>Napisz program, który wczytuje n liczb całkowitych do jednowymiarowej tablicy i wyświetla tę tablicę. Wartość n<100 podaje użytkownik. Liczby należy wprowadzić do komponentu textarea oddzielone przecinkami. Program powinien zweryfikować, czy n jest liczbą całkowitą mniejszą od 100, czy podane wartości są liczbami całkowitymi, oraz czy ich liczba zgadza się z n, a następnie wyświetlić tablicę w czytelny sposób.</p>
<form action="index.php" method="post">
    <label for="n">Podaj liczbę elementów (n): </label><input type="number" id="n" name="n"><br>
    <label for="liczby">Wartości tablicy (liczby całkowite oddzielone przecinkami): </label><textarea id="liczby" name="liczby" placeholder="np. 1, 2, 3, 4" cols="20" rows="20"></textarea><br>
    <input type="submit">
</form>
<div id="res">
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $n = $_POST['n'];
        $l = $_POST['liczby'];
        $liczby = explode(", ", $l);

        if(is_numeric($n))
        {
            echo "Liczba wprowadzanych elementów: $n<br>";
            echo "Wprowadzane liczby: ";
            for($i=0; $i<sizeof($liczby); $i++)
                echo $liczby[$i]." ";
            echo "<br>";
            $n = intval($n);
            $liSieZgadzaja = true;
            if($n > 0 && $n < 100)
            {
                for($i = 0; $i < sizeof($liczby); $i++)
                    if(!is_numeric($liczby[$i]))
                    {
                        $liSieZgadzaja = false;
                        break;
                    }

                if(!$liSieZgadzaja)
                    echo "Wpisano niepoprawne wartości.\n";
                else
                {
                    if(count($liczby) !== $n)
                        echo "Błędna ilość elementów.\n";
                    else
                    {
                        $wynik = array();
                        for($i = 0; $i < $n; $i++)
                            $wynik[] = $liczby[$i];

                        echo "Rezultat:<br>";
                        for($i = 0; $i < sizeof($wynik); $i++)
                            echo $wynik[$i]." ";
                    }
                }
            }
        }

    }
    ?>
</div>
</body>
</html>