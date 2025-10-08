<?php
echo "Zadanie T59a - data ostatnich odwiedzin na stronie<br>Autor: Fabian Latosiński 3P_1<br>";

date_default_timezone_set('Europe/Warsaw');

$cookie_name = "wizyta";

$cookie_value = date("Y-m-d H:i:s");

$expiration_time = time() + (86400 * 30);

setcookie($cookie_name, $cookie_value, $expiration_time, "/");

echo "Strona ostatnio odwiedzona: $cookie_value";