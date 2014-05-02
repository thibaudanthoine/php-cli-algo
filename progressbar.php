#!/usr/bin/env php
<?php

$done = '';
$i = 0;
while ($i <= 100) {

    if ($i > 0) {
 	$done = str_repeat('=', $i - 1) . '>';
    }

    $remaining = str_repeat('.', 100 - $i);

    fwrite(STDOUT, "[\033[33m{$done}{$remaining}\033[0m]");
    fwrite(STDOUT, " {$i}%" . (($i == 100) ? ' Completed' : '') . PHP_EOL);
    fwrite(STDOUT, "\033[1A");
    usleep(10000);
    $i++;
}

fwrite(STDOUT, PHP_EOL);

exit(0);
