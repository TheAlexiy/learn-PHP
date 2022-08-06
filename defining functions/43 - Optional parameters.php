<?php

namespace HexletBasics\DefineFunctions\DefaultArguments;

// BEGIN (write your solution here)
function getHiddenCard($str, $hide = 4) {
    return str_repeat('*', $hide) . substr($str, -4);
}
// END