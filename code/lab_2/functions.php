<?php
function increaseEnthusiasm(string $input): string
{
    return $input .= "!";
}

function repeatThreeTimes(string $input): string
{
    return $input . $input . $input;
}

function cut(string $input, int $maxLen = 10): string
{
    $end = min(strlen($input), $maxLen);
    $result = "";
    for ($i = 0; $i < $end; $i++)
        $result .= $input[$i];
    return $result;
}

function recursivePrint(array $arr, int $off = 0)
{
    if ($off == count($arr))
        return;
    echo $arr[$off] . " ";
    recursivePrint($arr, $off + 1);
    if ($off == 0)
        echo nl2br("\n");
}

function infiniteDigit(int $num): int
{
    $digitsSum = 0;
    while ($num > 0) {
        $digitsSum += $num % 10;
        $num /= 10;
    }
    return $digitsSum > 9 ? infiniteDigit($digitsSum) : $digitsSum;
}

echo nl2br(increaseEnthusiasm("PAAAAMPARAAAAAAAAM") . "\n");
echo nl2br(repeatThreeTimes("eat,code,sleep.") . "\n");
echo nl2br(increaseEnthusiasm(repeatThreeTimes("sleeeep")) . "\n");
echo nl2br("cut(random_stuff)=" . cut("random_stuff") . "\n");
echo nl2br("cut(random_stuff, 5)=" . cut("random_stuff", 5) . "\n");
$arr = [1, 2, 3, 4, 5];
recursivePrint($arr);
echo "let this thread in throttle: " . infiniteDigit(666);
