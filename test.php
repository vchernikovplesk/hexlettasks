<?php

function binarySum($a, $b)
{
    $decimalA = bindec($a);
    $decimalB = bindec($b);
    $sum = $decimalA + $decimalB;
    $binarySum = decbin($sum);
    return $binarySum;
}

function testBinarySum()
{
    $testCases = [
        ['10', '1', '11'],
        ['1101', '101', '10010'],
        ['0', '0', '0'],
        ['1111', '1111', '11110'],
        ['101010', '11011', '1001101']
    ];

    foreach ($testCases as $testCase) {
        $binaryA = $testCase[0];
        $binaryB = $testCase[1];
        $expectedResult = $testCase[2];
        
        $result = binarySum($binaryA, $binaryB);
        
        if ($result === $expectedResult) {
            echo "PASS: binarySum('$binaryA', '$binaryB') returns '$result' (Expected: '$expectedResult')\n";
        } else {
            echo "FAIL: binarySum('$binaryA', '$binaryB') returns '$result' (Expected: '$expectedResult')\n";
        }
    }
}

testBinarySum();
echo binarySum('101', '011');