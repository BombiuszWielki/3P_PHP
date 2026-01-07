<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hodowla świnek morskich</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
<div id="baner">
    <h1>Hodowla świnek morskich - zamów świnkowe maluszki</h1>
</div>

<div id="menu">
    <a href="peruwianka.php">Rasa Peruwianka</a>
    <a href="american.php">Rasa American</a>
    <a href="crested.php">Rasa Crested</a>
</div>

<div id="blokGlowny">
    <img src="pliki11/american.jpg" alt="Świnka morska rasy american">
    <?php
    //skrypt 2
    $db = mysqli_connect("localhost", "root", "", "hodowla");
    $query = "SELECT DISTINCT s.data_ur, s.miot, r.rasa FROM swinki as s JOIN rasy as r WHERE r.id=6;";
    $result = mysqli_query($db, $query);

    $r = mysqli_fetch_row($result);
    echo "<h2>Rasa: $r[2]</h2>";
    echo "<p>Data urodzenia: $r[0]</p>";
    echo "<p>Oznaczenie miotu: $r[1]</p>";

    mysqli_close($db);
    ?>

    <hr>

    <h2>Świnki w tym miocie</h2>
    <?php
    //skrypt 3
    $db = mysqli_connect("localhost", "root", "", "hodowla");
    $query = "SELECT imie, cena, opis FROM swinki WHERE rasy_id = 6;";
    $result = mysqli_query($db, $query);

    $r = mysqli_fetch_row($result);
    echo "<h3>$r[0] - $r[1]</h3>";
    echo "<p>$r[2]</p>";

    mysqli_close($db);
    ?>
</div>

<div id="blokPrawy">
    <h3>Poznaj wszystkie rasy świnek morskich</h3>
    <ol>
        <?php
        //skrypt 1
        $db = mysqli_connect("localhost", "root", "", "hodowla");
        $query = "SELECT rasa FROM rasy;";
        $result = mysqli_query($db, $query);

        for($i=0; $i<mysqli_num_rows($result); $i++)
        {
            $r =  mysqli_fetch_row($result);
            echo "<li>".$r[0]."</li>";
        }
        mysqli_close($db);
        ?>
    </ol>
</div>

<div id="stopka">
    <p>Stronę wykonał: Fabian Latosiński 3P_1</p>
</div>
</body>
</html>