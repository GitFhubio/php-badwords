<?php

/*
per lanciare questo script php
aprire il terminale e digitare:
php cli.php + tuo nome + numero 1 + numero 2
*/

//var_dump($argv);

echo "We ciao come stai " . $argv[1] . "?";

function somma($a, $b) {
    return $a + $b;
};

echo "\r\nLa somma dei due numeri inseriti è " . somma($argv[2],$argv[3]) . "\r\n";
