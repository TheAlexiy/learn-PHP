<?php

namespace HexletBasics\Logic\LogicalNegation;

//use function HexletBasics\Functions\mb_strrev;

// BEGIN
function isPalindrome($str) {
    $str = strtolower($str);
    return $str === strrev($str);
}
function isNotPalindrome($str) {
    return !isPalindrome($str);
}
// END
