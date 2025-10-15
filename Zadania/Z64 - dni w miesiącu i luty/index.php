<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z64 - dni w miesiącu i luty</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Zadanie Z64 - dni w miesiącu i luty</h1>
<h2>Autor: Fabian Latosiński 3P_1</h2>
<p>Napisz program, który jak poprzednio, ale w przypadku lutego pyta dodatkowo o rok i dla lat przestępnych wyświetla 29 dni, a dla pozostałych 28.</p>
<form action="index.php" method="post">
    <label for="m">Podaj numer miesiąca (1-12):</label><input type="number" id="m" name="m"><br>
    <label for="r">Podaj rok:</label><input type="number" id="r" name="r"><br>
    <input type="submit">
</form>
<?php
if (isset($_POST['m']) && isset($_POST['r']))
{
    $m = $_POST['m'];
    $r = $_POST['r'];

    if($m < 1 || $m > 12)
        echo "Błędne dane";
    else
    {
        switch($m)
        {
            case 1:
            case 3:
            case 5:
            case 7:
            case 8:
            case 10:
            case 12:
                echo "Miesiąc nr $m ma 31 dni";
                break;
            case 4:
            case 6:
            case 9:
            case 11:
                echo "Miesiąc nr $m ma 30 dni";
                break;
            case 2:
                if(($r % 4 == 0 && $r % 100 != 0) || ($r % 400 == 0))
                {
                    echo "Miesiąc nr $m ma 29 dni";
                    break;
                }
                else
                {
                    echo "Miesiąc nr $m ma 28 dni";
                    break;
                }
                default:
                    echo "Cześć i czołem";
        }
    }
}
?>
</body>
</html>