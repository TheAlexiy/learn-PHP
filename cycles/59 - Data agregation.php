<?php

namespace HexletBasics\Loops\AgregationNumber;

// BEGIN
function multiplyNumbersFromRange($start, $end) {
    $mult = 1;
    while ($start <= $end) {
        $mult = $mult * $start;
        $start = $start + 1;
    }
    return $mult;
}
// END