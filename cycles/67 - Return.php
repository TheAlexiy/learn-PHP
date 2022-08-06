<?php

namespace HexletBasics\Loops\ReturnFromLoop;

// BEGIN
function hasChar($str, $char) {
    $i = 0;
    while($i < strlen($str)) {
        if ($str[$i] === $char) {
            return true;
        }
        $i++;
    }
    return false;
}
// END