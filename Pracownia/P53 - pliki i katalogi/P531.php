<?php
touch('nazwisko_i_imie.txt');
touch('doSkasowania.txt');
unlink('doSkasowania.txt');
mkdir('latosinski');
touch('latosinski/nazwisko_i_imie.txt');