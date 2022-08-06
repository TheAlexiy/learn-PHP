<?php

namespace HexletBasics\Loops\ForLoop;

// BEGIN
function sumOfSeries($arg1, $arg2) {
    $sum = 0;
    for($i = $arg1; $i <= $arg2; $i++) {
        $sum += $i;
    }
    return $sum;
}
// END