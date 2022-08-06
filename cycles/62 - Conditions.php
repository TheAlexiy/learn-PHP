<?php

namespace HexletBasics\Loops\ConditionsInsideLoops;

// BEGIN (write your solution here)
function countChars($str, $char) {
    $iter = 0;
    $count = 0;
    while ($iter < strlen($str)) {
        if (strtolower($str[$iter]) === strtolower($char)) {
            $count = $count + 1;
        }
        $iter = $iter + 1;
    }
    return $count;
}
// END