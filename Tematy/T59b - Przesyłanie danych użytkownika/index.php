<!DOCTYPE HTML>
<html lang="pl">
<head>
    <title>T59b - Przesyłanie danych użytkownika</title>
    <meta name="author" content="Fabian Latosiński 3P_1">
    <meta charset="UTF-8">
</head>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    setcookie("imie", $_POST['imie'], time()+3600);
    setcookie("nazwisko", $_POST['nazwisko'], time()+3600);
    setcookie("urodziny", $_POST['urodziny'], time()+3600);
    $_COOKIE = $_POST;
}
if (isset($_COOKIE['imie'], $_COOKIE['nazwisko'], $_COOKIE['urodziny'])) {
    $dzis_d = date("j");
    $dzis_m = date("n");
    $dzis_r = date("Y");
    list($uro_r, $uro_m, $uro_d) = explode("-", $_COOKIE['urodziny']);
    $uro = mktime(0, 0, 0, $uro_m, $uro_d, $dzis_r);
    $dzis = mktime(0, 0, 0, $dzis_m, $dzis_d, $dzis_r);
    if ($uro < $dzis) {
        $uro = mktime(0, 0, 0, $uro_m, $uro_d, $dzis_r + 1);
    }
    $dni = floor(($uro - $dzis) / 86400);
    echo "Witaj {$_COOKIE['imie']} {$_COOKIE['nazwisko']}<br>";
    echo "Twoje urodziny będą za $dni dni<br>";
}
?>
<body>
<form method="post">
    <label>Imię <input type="text" name="imie" required></label><br>
    <label>Nazwisko <input type="text" name="nazwisko" required></label><br>
    <label>Data urodzin <input type="date" name="urodziny" required></label><br>
    <input type="submit" value="wyślij">
</form>
</body>
</html>
