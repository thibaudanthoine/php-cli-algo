#!/usr/bin/env php
<?php

while (1) {
    // input
    fwrite(STDOUT, 'Enter an integer: ');
    $nombre = trim(fgets(STDIN));

    if (!is_numeric($nombre)) {
        fwrite(STDERR, "{$nombre} is not a numeric");
	exit(1);
    }

    $nombre = (integer) $nombre;
    $quotient = $nombre;

    $binaire = '';
    do {
	$reste = $quotient % 2;
        $binaire .= (string) $reste;
    } while ( (integer) ( $quotient = $quotient / 2 ) != 0 );

    $binaire = strrev($binaire);
    fwrite(STDOUT, "{$nombre} in decimal is {$binaire} in binary" . PHP_EOL);
}

exit(0);
