<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
    <title>Koszyk</title>
    <meta charset="UTF-8">
    <meta name="author" content="Fabian Latosiński">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Zawartość koszyka</h1>
    <?php
    if (isset($_SESSION['koszyk'])) {
        $produkty = unserialize($_SESSION['koszyk']);
        if (!empty($produkty)) {
            echo "<ul>";
            foreach ($produkty as $produkt) {
                echo "<li>" . htmlspecialchars($produkt) . "</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Twój koszyk jest pusty.</p>";
        }
    } else {
        echo "<p>Twój koszyk jest pusty.</p>";
    }
    ?>
    <p><a href="index.php">Przejdź do listy produktów</a></p>
</div>
</body>
</html>
