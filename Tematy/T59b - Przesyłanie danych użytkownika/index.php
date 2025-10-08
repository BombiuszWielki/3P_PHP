<?php
date_default_timezone_set('Europe/Warsaw');
$cookie_name = "dane_uzytkownika";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{

    $imie = filter_input(INPUT_POST, 'imie', FILTER_SANITIZE_STRING);
    $nazwisko = filter_input(INPUT_POST, 'nazwisko', FILTER_SANITIZE_STRING);
    $data_urodzenia_str = filter_input(INPUT_POST, 'data_urodzenia', FILTER_SANITIZE_STRING);

    if (!empty($imie) && !empty($nazwisko) && !empty($data_urodzenia_str))
    {
        $user_data = [
            'imie' => $imie,
            'nazwisko' => $nazwisko,
            'data_urodzenia' => $data_urodzenia_str
        ];

        $cookie_value = serialize($user_data);

        $expiration_time = time() + (86400 * 30);
        setcookie($cookie_name, $cookie_value, $expiration_time, "/");

        $message = "<p>Dane zostały zapisane w pliku cookie!</p>";
    }
    else
    {
        $message = "<p>Proszę wypełnić wszystkie pola formularza.</p>";
    }
}

if(isset($_COOKIE[$cookie_name]))
{
    $user_data = unserialize($_COOKIE[$cookie_name]);

    if ($user_data)
    {
        $imie_c = htmlspecialchars($user_data['imie']);
        $nazwisko_c = htmlspecialchars($user_data['nazwisko']);
        $data_urodzenia_c = htmlspecialchars($user_data['data_urodzenia']);

        $message .= "<h2>Witaj, $imie_c $nazwisko_c!</h2>";
        $message .= "<p>Dane odczytane z pliku cookie: Imię: $imie_c, Nazwisko: $nazwisko_c, Data urodzenia: $data_urodzenia_c.</p>";

        try
        {
            $dzien_miesiac_urodzenia = substr($data_urodzenia_c, 5);
            $aktualny_rok = date('Y');

            $urodziny_w_tym_roku = new DateTime("$aktualny_rok-$dzien_miesiac_urodzenia");
            $dzisiaj = new DateTime('today');

            $data_urodzin_do_obliczen = clone $urodziny_w_tym_roku;

            if ($urodziny_w_tym_roku < $dzisiaj)
                $data_urodzin_do_obliczen->modify('+1 year');

            $interval = $dzisiaj->diff($data_urodzin_do_obliczen);
            $dni_do_urodzin = $interval->days;

            if ($dni_do_urodzin == 0)
                $message .= "<p>Dziś są Twoje urodziny!</p>";
            else
                $message .= "<p>Za <strong>$dni_do_urodzin</strong> dni będziesz obchodzić urodziny!</p>";

        }
        catch (Exception $e)
        {
            $message .= "<p>Błąd w obliczeniach daty: " . $e->getMessage() . "</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>T59b - Przesyłanie danych użytkownika</title>
</head>
<body>

<h1>Zadanie T59b - Przesyłanie danych użytkownika</h1>
<h2>Autor: Fabian Latosiński 3P_1</h2>

<?php echo $message; ?>

<hr>

<form method="POST" action="">
    <label for="imie">Imię:</label>
    <input type="text" id="imie" name="imie" required>

    <label for="nazwisko">Nazwisko:</label>
    <input type="text" id="nazwisko" name="nazwisko" required>

    <label for="data_urodzenia">Data Urodzenia:</label>
    <input type="date" id="data_urodzenia" name="data_urodzenia" required>

    <input type="submit" value="Zapisz w Cookie">
</form>

</body>
</html>