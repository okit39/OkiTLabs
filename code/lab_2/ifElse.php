<?php
$test = 0;
if ($test == 0) {
    echo nl2br("верно\n");;
}
echo $test == 0 ? nl2br("верно\n") : "";

$age = 19;
if ($age < 10)
    echo nl2br("Error: less than 10.\n");
else if ($age > 99)
    echo nl2br("Error: more than 99\n");
else {
    $sum = 0;
    while ($age > 0) {
        $digitsSum += $age % 10;
        $age /= 10;
    }
    echo nl2br("сумма цифр  "
        . ($age <= 9 ? "однозначна" : "двузначна")
        . "\n");
}

$arr = [1, 2, 3];
if (count($arr) === 3) {
    echo array_sum($arr);
}
