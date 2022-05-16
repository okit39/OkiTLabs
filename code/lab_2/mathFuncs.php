<?php
$num = 10;
$b = 3;

echo nl2br("$num % $b = " . ($num % $b) . "\n");

if (($num % $b) === 0)
    echo nl2br("Делится, $num / $b =" . ($num / $b) . "\n");
else
    echo nl2br("Делится с остатком, $num % $b = " . ($num % $b) . "\n");

$st = 2 ** 10;
$sqrt245 = sqrt(245);
$arr = [4, 2, 5, 19, 13, 0, 10];
$summ = 0;

foreach ($arr as $elem)
    $summ += $elem ** 2;

$summ = sqrt($summ);
echo nl2br("st=$st, sqrt245=$sqrt245, summ=$summ\n");

$sqrt379 = sqrt(379);
echo nl2br("Округление корня из 379: \n");
echo nl2br(round($sqrt379) . "\n");
echo nl2br(round($sqrt379, 1) . "\n");
echo nl2br(round($sqrt379, 2) . "\n");

$sqrt587 = sqrt(587);
$rounded = [
    "floor" => floor($sqrt587),
    "ceil"  => ceil($sqrt587)
];

echo nl2br("floor(sqrt587)={$rounded['floor']}, ceil(sqrt587)={$rounded['ceil']}\n");

$arr = [4, -2, 5, 19, -130, 0, 1];
echo nl2br("min=" . min($arr) . ", max=" . max($arr) . "\n");

echo nl2br("Случайное число от 1 до 100: " . rand(1, 100) . "\n");

$arr = [];
echo "Массив случайных чисел:";

for ($i = 0; $i < 10; $i++) {
    $elem = $arr[$i] = rand();
    echo " " . $elem;
}
echo nl2br("\n");

$arr = [1, 2, -1, -2, 3, -3];
echo "Массив модулей:";
foreach ($arr as $i => $elem) {
    $elem = $arr[$i] = abs($arr[$i]);
    echo " " . $elem;
}
echo nl2br("\n");

$num = 30;
$divisors = [];
echo nl2br("Делители числа {$num}:\n");

for ($i=1; $i<=$num; $i++){  
    if ($num % $i==0)      
      echo " $i ";
    }
echo nl2br("\n");

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;

foreach ($arr as $i => $elem) {
    if (($sum += $elem) > 10) {
        echo nl2br("sum(arr, n=1.." . ($i + 1) . ") = {$sum}>10");
        break;
    }
}
