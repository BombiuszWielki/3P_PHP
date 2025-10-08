<?php
//DANE LOGOWANIA: nazwa: marek | hasło: mar100
session_start();
if (isset($_SESSION['log'])) {
    header('Location: strona.php');
    exit();
} elseif (isset($_POST['nazwa']) && isset($_POST['haslo'])) {
    if ($_POST['nazwa'] == 'marek' && $_POST['haslo'] == 'mar100') {
        $_SESSION['log'] = $_POST['nazwa'];
        header('Location: strona.php');
        exit();
    } else {
        $error = "Nieprawidłowe dane logowania";
    }
}
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
    <title>P59a - Strona logowania</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Zadanie P59a - Strona logowania</h1>
<h2>Autor: Fabian Latosiński 3P_1</h2>
<div class="container">
    <form action="index.php" method="post">
        <h3>Logowanie</h3>
        <p>PHP - strona logowania Przyjmij, że do strony internetowej mają dostęp tylko zalogowani użytkownicy. Wykorzystaj mechanizm sesji do przeprowadzenia autoryzacji użytkownika.</p>
        <?php if (!empty($error)) : ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>
        <h5>Nazwa użytkownika:</h5>
        <label><input type="text" name="nazwa" value="" size="25"></label>
        <h5>Hasło:</h5>
        <label><input type="password" name="haslo" value="" size="25"></label>
        <br><br>
        <label><input type="submit" value="Zaloguj się"></label>
    </form>
</div>
</body>
</html>