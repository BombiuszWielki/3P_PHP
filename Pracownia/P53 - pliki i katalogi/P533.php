<?php
echo readfile("imiona.txt")."<br>";
$text = file("imiona.txt");
$text = array_reverse($text);
echo $text;