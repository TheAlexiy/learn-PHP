<?php

namespace HexletBasics\Loops\AgregationString;

// BEGIN (write your solution here)
function joinNumbersFromRange($start, $fin) {
    $str = "";
    while ($start <= $fin) {
        $str = $str . $start;
        $start = $start + 1;
    }
    return $str;
}
// END