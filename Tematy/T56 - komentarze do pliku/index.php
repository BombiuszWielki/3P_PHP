<?php

if (isset($_POST['komentarz'])) {
    $tekst = substr($_POST['komentarz'], 0, 255);
    $tekst = strip_tags($tekst) . "\n";

    if (!$op = fopen('opinie.txt', 'a')) {
        echo "Błąd!. Nie można otworzyć pliku opinie.txt";
    }
    else{if (fwrite($op, $tekst) === false) {
        echo "Dodanie komentarza nie powiodło się";
    }
    }
}
?>

<html lang="pl">
<head>
    <title>Opinie użytkowników</title>
    <meta charset="UTF-8">
</head>
<body>
<div>
    <form action="index.php" method="post">
        <p><b>Dodaj swój komentarz na temat globalnego ocieplenia</b><br>(Maksymalnie 255 znaków)</p>
        <textarea name="komentarz" rows="6" cols="50" wrap="hard"></textarea><br>
        <input type="submit" value="Wyślij">
</div>
<b>Dodane opinie:</b>
<div>
<?php
$opinie = '';
if (file_exists('./opinie.txt')) {
    $opinie =file_get_contents('./opinie.txt');
    $opinie = nl2br($opinie);
}if ($opinie != '') {
    echo $opinie;
} else {
    echo "Brak opinii na temat zmian klimatu.";
}
?>
</div>
</body>
</html>