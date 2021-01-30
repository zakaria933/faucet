<?php

$res = "\033[0m";
$hitam = "\033[0;30m";
$abu2 = "\033[1;30m";
$putih = "\033[0;37m";
$putih2 = "\033[1;37m";
$red = "\033[0;31m";
$red2 = "\033[1;31m";
$green = "\033[0;32m";
$green2 = "\033[1;32m";
$yellow = "\033[0;33m";
$yellow2 = "\033[1;33m";
$blue = "\033[0;34m";
$blue2 = "\033[1;34m";
$purple = "\033[0;35m";
$purple2 = "\033[1;35m";
$lblue = "\033[0;36m";
$lblue2 = "\033[1;36m";

while (true) {
    for ($i = 60; $i > -1; $i--) {
        echo "\r                                   \r";
        echo "\033[0;32m # menunggu terkadang membosankan " . "\033[0;37m[ " . "\033[0;32m" . $i . "\033[0;37m ]";
        sleep(1);

        if ($i == 60 or $i == 57 or $i == 54 or $i == 51 or $i == 48 or $i == 45 or $i == 42 or $i == 39 or $i == 36 or $i == 33 or $i == 30 or $i == 27 or $i == 24 or $i == 21 or $i == 18 or $i == 15 or $i == 12 or $i == 9 or $i == 6 or $i == 3) {
            echo $red . "    █ █" . $putih . " █ ";
        }
        if ($i == 59 or $i == 56 or $i == 53 or $i == 50 or $i == 47 or $i == 44 or $i == 41 or $i == 38 or $i == 35 or $i == 32 or $i == 29 or $i == 26 or $i == 23 or $i == 20 or $i == 17 or $i == 14 or $i == 11 or $i == 8 or $i == 5 or $i == 2) {
            echo $red . "    █" . $putih . " █ █ ";
        }
        if ($i == 58 or $i == 55 or $i == 52 or $i == 49 or $i == 46 or $i == 43 or $i == 40 or $i == 37 or $i == 34 or $i == 31 or $i == 28 or $i == 25 or $i == 22 or $i == 19 or $i == 16 or $i == 13 or $i == 10 or $i == 7 or $i == 4 or $i == 1) {
            echo $putih . "    █ █ █ ";
        }
    }
}
