<?php

namespace HexletBasics\Loops\Mutators;

// BEGIN
function makeItFunny($str, $n) {
    $new = "";
    $i = 0;
    while ($i < strlen($str)) {
        if (($i + 1) % $n == 0) {
            $new = $new . strtoupper($str[$i]);
        } else {
            $new = "{$new}{$str[$i]}";
        }
        $i++;
    }
    return $new;
}
// END