<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Poziomy rzek</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
<div id="baner1">
    <img src="obraz1.png" alt="Mapa Polski">
</div>
<div id="baner2">
    <h1>Rzeki w województwie dolnośląskim</h1>
</div>

<div id="menu">
    <form action="poziomRzek.php" method="post">
        <input type="radio" name="opcje" id="wszystkie" value="wszystkie" class="opcje"> <label for="wszystkie">Wszystkie</label>
        <input type="radio" name="opcje" id="stanAlarmowy" value="stanAlarmowy" class="opcje"> <label for="stanAlarmowy">Ponad stan alarmowy</label>
        <input type="radio" name="opcje" id="stanOstrzegawczy" value="stanOstrzegawczy" class="opcje"> <label for="stanOstrzegawczy">Ponad stan ostrzegawczy</label>
        <input type="submit" value="Pokaż">
    </form>
</div>
<div id="blokLewy">
    <h3>Stany na dzień 2022-05-05</h3>
    <table>
        <tr>
            <th>Wodomierz</th>
            <th>Rzeka</th>
            <th>Ostrzegawczy</th>
            <th>Alarmowy</th>
            <th>Aktualny</th>
        </tr>

        <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $db = mysqli_connect("localhost", "root", "", "rzeki");
            $opcja = $_POST['opcje'];
            $query = "";
            if($opcja == "wszystkie")
                $query = "SELECT w.nazwa, w.rzeka, w.stanOstrzegawczy, w.stanAlarmowy, p.stanWody FROM wodowskazy AS w JOIN pomiary AS p ON w.id = p.id";
            else if($opcja == "stanAlarmowy")
                $query = "SELECT w.nazwa, w.rzeka, w.stanOstrzegawczy, w.stanAlarmowy, p.stanWody FROM wodowskazy AS w JOIN pomiary AS p ON w.id = p.id WHERE p.stanWody > w.stanOstrzegawczy;";
            else if($opcja == "stanOstrzegawczy")
                $query = "SELECT w.nazwa, w.rzeka, w.stanOstrzegawczy, w.stanAlarmowy, p.stanWody FROM wodowskazy AS w JOIN pomiary AS p ON w.id = p.id WHERE p.stanWody > w.stanAlarmowy;";

            $result = mysqli_query($db, $query);

            while($row = mysqli_fetch_row($result))
            {
                echo "<tr>";
                echo "<td>".$row[0]."</td>";
                echo "<td>".$row[1]."</td>";
                echo "<td>".$row[2]."</td>";
                echo "<td>".$row[3]."</td>";
                echo "<td>".$row[4]."</td>";
                echo "</tr>";
            }
            mysqli_close($db);
        }
        ?>

    </table>
</div>
<div id="blokPrawy">
    <h3>Informacje</h3>
    <ul>
        <li>Brak ostrzeżeń o burzach z gradem</li>
        <li>Smog w mieście Wrocław</li>
        <li>Silny wiatr w Karkonoszach</li>
    </ul>
    <h3>Średnie stany wód</h3>

    <?php
        $db = mysqli_connect("localhost", "root", "", "rzeki");
        $query = "SELECT dataPomiaru, AVG(stanWody) AS sredniStanWody FROM pomiary GROUP BY dataPomiaru;";
        $result = mysqli_query($db, $query);

        while($row = mysqli_fetch_row($result))
        {
            echo "<p>$row[0] : $row[1]</p>";
        }
        mysqli_close($db);
    ?>

    <a href="https://komunikaty.pl">Dowiedz się więcej</a>
    <img src="obraz2.jpg" alt="rzeka">
</div>
<div id="stopka">
    <p>Stronę wykonał: Fabian Latosiński 3P_1</p>
</div>
</body>
</html>