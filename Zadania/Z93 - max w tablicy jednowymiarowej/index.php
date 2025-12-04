<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z93 - max w tablicy jednowymiarowej</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Zadanie Z93 - max w tablicy jednowymiarowej</h1>
<h2>Autor: Fabian Latosiński 3P_1</h2>
<p>Napisz program, który wczytuje liczby całkowite do jednowymiarowej tablicy, wyświetla tę tablicę i wyświetla maksymalną wartość zapisaną w tablicy. Użytkownik wprowadza liczby do komponentu textarea oddzielone przecinkami. Program powinien zweryfikować, czy podane wartości są liczbami całkowitymi, a w odpowiedzi podać liczbę elementów w tablicy oraz maksymalną wartość.</p>
<form action="index.php" method="post">
    <label for="li">Wartości tablicy (liczby całkowite oddzielone przecinkami): </label><textarea name="li" id="li" cols="30" rows="10" placeholder="np. 1, 2, 3, 4"></textarea>
    <input type="submit">
</form>
<div id="res">
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $li = explode(", ", $_POST['li']);
        $czyZgadzajaSie = true;

        echo "Wprowadzone wartości: ";
        for($i = 0; $i < sizeof($li); $i++)
        {
            echo $li[$i].", ";
            if(!is_numeric($li[$i]))
                $czyZgadzajaSie = false;
        }
        echo "<br>";

        if($czyZgadzajaSie)
        {
            $ile = count($li);
            echo "Tablica jednowymiarowa ($ile elementów):<br>";

            echo "<table border='1'><tr>";
            for($i = 0; $i < $ile; $i++)
                echo "<td>$li[$i]</td>";
            echo "</tr></table><br>";

            $max = -1;
            for($i = 0; $i < $ile; $i++)
                if($li[$i] > $max)
                    $max = $li[$i];
            echo "Ilość elementów tablicy: $ile<br>Maksymalna wartość w tablicy: $max";
        }
        else
            echo "Rezultat: Wszystkie wartości muszą być liczbami całkowitymi. Przynajmniej jedna wartość nie jest liczbą całkowitą.";
    }
    ?>
</div>
</body>
</html>