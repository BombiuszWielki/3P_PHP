<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
    <title>P59a - Strona logowania</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="author" content="Fabian Latosiński">
</head>
<body>
<div class="container">
    <h2>Lista artykułów</h2>

    <?php
    if (isset($_POST['lista']) && !empty($_POST['lista'])) {
        if (!empty($_SESSION['koszyk'])) {
            $koszyk = array_unique(array_merge(unserialize($_SESSION['koszyk']), $_POST['lista']));
        } else {
            $koszyk = $_POST['lista'];
        }
        $_SESSION['koszyk'] = serialize($koszyk);
        echo "<p class='sigma'>Wybrane produkty zostały umieszczone w koszyku.</p>";
    }
    ?>

    <form action="index.php" method="post">
        <label>Wybór produktu:
            <select name="lista[]" multiple="multiple" size="9">
                <option value="Monitor">Monitor</option>
                <option value="Drukarka">Drukarka</option>
                <option value="Klawiatura">Klawiatura</option>
                <option value="Myszka">Myszka</option>
                <option value="Głośniki">Głośniki</option>
                <option value="Kamera internetowa">Kamera internetowa</option>
                <option value="Słuchawki">Słuchawki</option>
                <option value="Stacja DVD">Stacja DVD</option>
                <option value="Dysk twardy">Dysk twardy</option>
                <option value="Pendrive">Pendrive</option>
                <option value="Komputer">Komputer</option>
            </select>
        </label>
        <p>Wybierz produkty, trzymając wciśnięty klawisz Ctrl (Cmd na Macu).</p>
        <input type="submit" value="Wyślij">
    </form>

    <p><a href="koszyk.php">Przejdź do koszyka</a></p>
</div>
</body>
</html>
