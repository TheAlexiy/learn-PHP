<?php

namespace HexletBasics\Loops\IterationOverString;

// BEGIN (write your solution here)
function printReversedWordBySymbol($word) {
    $var = -1;
    while ($var >= -strlen($word)) {
        print_r($word[$var] . "\n");
        $var = $var - 1;
    }
}
// END