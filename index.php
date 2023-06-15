<?php

function sumOfProperDivisors($number) {
    $sum = 0;
    for ($i = 1; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            $sum += $i;
            if ($i != $number / $i) {
                $sum += $number / $i;
            }
        }
    }
    return $sum - $number; // Exclude the number itself from the sum
}

$limit = 10000;
$amicableSum = 0;

for ($i = 1; $i < $limit; $i++) {
    $a = $i;
    $b = sumOfProperDivisors($a);

    if ($a != $b && sumOfProperDivisors($b) == $a) {
        $amicableSum += $a;
    }
}

echo $amicableSum;

?>