<?php

namespace HexletBasics\Loops\WhileLoop;

function printNumbers($firstNumber)
{
    // BEGIN
    while ($firstNumber !== 0) {
        print_r($firstNumber . "\n");
        $firstNumber = $firstNumber - 1;
    }
    print_r('finished!');
    // END
}