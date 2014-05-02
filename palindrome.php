#!/usr/bin/env php
<?php

$word = "";

while (1) {
    // ask for input
    fwrite(STDOUT, "Enter a word: ");
    
    // get input
    $word = trim(strtolower(fgets(STDIN)));
    
    if (strlen($word) < 1 
 	|| 'exit' == $word) {
	fwrite(STDOUT, "Exiting..." . PHP_EOL);
	break;
    }

    $i = 0;
    $palindrome = true;
    while ($i < strlen($word)) {
       if ($word[$i] != $word[strlen($word) - 1 - $i]) {
           $palindrome = false;
       }
       $i++;
    }

    if ($palindrome) {
        $result = "Yes! \033[33m{$word}\033[37m is a palindrome";
    } else {
	$result = "Sorry, \033[33m{$word}\033[37m isn't a palindrome";
    }

    fwrite(STDOUT, $result . PHP_EOL);
}

exit(0);
