<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>T60a - praca z bazą danych</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Zadanie T60a - praca z bazą danych</h1>
<h2>Autor: Fabian Latosiński 3P_1</h2>
<p>Utwórz bazę danych o nazwie 3p_1_baza_pracownikow.
    Do zadania dołączony został plik zawierający dane 114 pracowników - dokonaj konwersji tych danych do formaty txt (uzyskaj plik z danymi pracownicy.txt.
    Na utworzonej stronie projektu znajduje się przycisk "Utwórz tabelę", który w bazie 3p_1_baza_pracownikow tworzy tabelę pracownicy.
    Drugi przycisk "Załaduj dane" dodaje dane z pliku tekstowego pracownicy.txt do tabeli pracownicy.
    Trzeci przycisk wyświetla dane z tabeli pracownicy w postaci tabelarycznej.</p>
<form action="index.php" method="post">
    <input type="submit" name="utworz" value="Utwórz tabelę">
    <input type="submit" name="zaladuj" value="Załaduj dane">
    <input type="submit" name="wyswietl" value="Wyświetl dane">
</form>

<?php
$q1 = "CREATE TABLE IF NOT EXISTS pracownicy (
    Numer_id INT PRIMARY KEY,
    Nazwisko VARCHAR(50),
    Imie VARCHAR(50),
    Stanowisko VARCHAR(50),
    Dzial VARCHAR(50),
    Sekcja VARCHAR(50)
)";
$q3 = "SELECT * FROM pracownicy";

if (isset($_POST['utworz']))
{
    $db = mysqli_connect('localhost', 'root', '', '3p_1_baza_pracownikow');
    mysqli_query($db, $q1);
    mysqli_close($db);
}

if (isset($_POST['zaladuj']))
{
    $db = mysqli_connect('localhost', 'root', '', '3p_1_baza_pracownikow');

    $content = @file_get_contents('pracownicy.txt');
    $cleaned_content = preg_replace('/\\s*/', '', $content);
    $lines = array_filter(explode("\n", $cleaned_content), 'trim');
    $employees = [];
    $current_id = null;
    $current_data = "";

    foreach ($lines as $line) {
        if (preg_match('/^\s*(\d{4})\s+(.*)/', $line, $matches))
        {
            if ($current_id !== null)
                $employees[$current_id] = $current_data;
            $current_id = $matches[1];
            $current_data = trim($matches[2]);
        }
        else
            $current_data .= " " . trim($line);
    }
    if ($current_id !== null)
        $employees[$current_id] = $current_data;

    $import_count = 0;
    $bludek = $db->prepare("INSERT INTO pracownicy (Numer_id, Nazwisko, Imie, Stanowisko, Dzial, Sekcja) 
                          VALUES (?, ?, ?, ?, ?, ?)");

    foreach ($employees as $id => $data_string)
    {
        if (preg_match('/^(\w+\s+\w+)\s+(.+?)\s+([A-Za-zęłóśźżń-]+)\s+([A-Za-zęłóśźżń-]+)$/u', $data_string, $fields))
        {

            list($nazwisko, $imie) = explode('\t', $fields[1], 2);

            $stanowisko = trim($fields[2]);
            $dzial = trim($fields[3]);
            $sekcja = trim($fields[4]);

            if ($bludek->bind_param("isssss", $id, $nazwisko, $imie, $stanowisko, $dzial, $sekcja))
            {
                if ($bludek->execute())
                    $import_count++;
            }
        }
    }
    $bludek->close();
    mysqli_close($db);
}

if (isset($_POST['wyswietl'])) {
    $db = mysqli_connect('localhost', 'root', '', '3p_1_baza_pracownikow');
    $result = mysqli_query($db, $q3);

    if ($result) {
        echo "<h3>Dane z tabeli pracownicy:</h3>";
        echo "<table><tr><th>ID</th><th>Nazwisko</th><th>Imię</th><th>Stanowisko</th><th>Dział</th><th>Sekcja</th></tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['Numer_id']) . "</td>";
            echo "<td>" . htmlspecialchars($row['Nazwisko']) . "</td>";
            echo "<td>" . htmlspecialchars($row['Imie']) . "</td>";
            echo "<td>" . htmlspecialchars($row['Stanowisko']) . "</td>";
            echo "<td>" . htmlspecialchars($row['Dzial']) . "</td>";
            echo "<td>" . htmlspecialchars($row['Sekcja']) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    }
    mysqli_close($db);
}
?>
</body>
</html>