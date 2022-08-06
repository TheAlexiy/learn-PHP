<?php

namespace HexletBasics\DeepIntoStrings\Unicode;

function invertCase($text)
{
    // BEGIN
    $res = "";
    $i = 0;
    while($i < mb_strlen($text)) {
        $temp = mb_strtoupper(mb_substr($text, $i, 1));
        if ($temp === mb_substr($text, $i, 1)) {
            $res = $res . mb_strtolower(mb_substr($text, $i, 1));
        } else {
            $res = $res . $temp;
        }
        $i++;
    }
    return $res;
    // END
}