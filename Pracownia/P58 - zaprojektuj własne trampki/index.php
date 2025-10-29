<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="author" content="Fabian Latosiński 3P_1">

    <title>P58 - zaprojektuj własne trampki</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="main">
    <header>
        <h1>Formularz konkursu "Podrasuj swoje buty!"</h1>
        <p>Chcesz zamienić swoje stare trampki na nową parę zaprojektowanych przez siebie butów Forcefield?<br>Napisz nam, dlaczego sądzisz, że powinieneś pożegnać się ze swoimi wysłużonymi butami, a być może zostaniesz jednym z laureatów konkursu!</p>
    </header>
    <form action="buty.php" method="post">
        <fieldset>
            <legend>Podstawowe dane</legend>
            <label for="imie">Imię i nazwisko: </label><input type="text" id="imie" name="imie"><br>
            <label for="email">E-mail: </label><input type="email" id="email" name="email"><br>
            <label for="tel">Telefon: </label><input type="tel" id="tel" name="tel"><br>
            <label for="opis">Moje buty:</label><br>
            <textarea name="opis" id="opis" cols="50" rows="5" placeholder="Nie więcej niż 300 znaków" maxlength="300"></textarea>
        </fieldset>
        <h2>Zaprojektuj własne trampki</h2>
        <fieldset>
            <legend>Własny projekt butów</legend>
            <fieldset>
                <legend>Kolor główny (wybierz jeden)</legend>
                <input type="radio" id="red" name="kolor1" value="czerwony"><label for="red"> czerwony</label>
                <input type="radio" id="blue" name="kolor1" value="niebieski"><label for="blue"> niebieski</label>
                <input type="radio" id="black" name="kolor1" value="czarny"><label for="black"> czarny</label>
                <input type="radio" id="silver" name="kolor1" value="srebrny"><label for="silver"> srebrny</label>
            </fieldset>
            <fieldset>
                <legend>Kolor dopełniający</legend>
                <label for="color">--> </label><input type="color" id="color" name="kolor2">
            </fieldset>
            <fieldset>
                <legend>Opcje (możesz zaznaczyć kilka)</legend>
                <input type="checkbox" id="op1" name="opcje[]" value="błyszczące sznurówki"><label for="op1"> błyszczące sznurówki</label>
                <input type="checkbox" id="op2" name="opcje[]" value="metalowe logo"><label for="op2"> metalowe logo</label>
                <input type="checkbox" id="op3" name="opcje[]" value="świecące podeszwy"><label for="op3"> świecące podeszwy</label>
                <input type="checkbox" id="op4" name="opcje[]" value="odtwarzacze MP3"><label for="op4"> odtwarzacze MP3</label>
            </fieldset>
            <fieldset>
                <legend>Rozmiar</legend>
                <label for="size">Rozmiar zgodny ze standardowymi numerami butów </label><input type="number" id="size" name="rozmiar">
            </fieldset>
        </fieldset>
        <input type="submit" value="Podrasuj swoje buty!"> <input type="reset" value="Resetuj">
    </form>
</div>
</body>
</html>