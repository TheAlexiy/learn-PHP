<?php

namespace HexletBasics\Conditionals\Elvis;

// BEGIN
function generateAmount($amount, $price)
{
    return $amount ?: $price * 3;
}
// END