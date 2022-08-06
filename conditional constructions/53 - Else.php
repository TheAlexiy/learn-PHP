<?php

namespace HexletBasics\Conditionals\IfElse;

// BEGIN
function normalizeUrl($str) {
    if (substr($str, 0, 7) === 'http://') {
        $str = substr_replace($str, 'https://' . substr($str, 7), 0);
    } else {
        $str = 'https://' . $str;
    }
    return $str;
}
// END