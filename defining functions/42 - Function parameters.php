<?php

namespace HexletBasics\DefineFunctions\Parameters;

// BEGIN
function truncate($str, $length)
{
    $cutString = substr($str, 0, $length);
    return "{$cutString}...";
}

// END