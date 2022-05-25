<?php
function printArray(array $arr)
{
    foreach ($arr as $elem)
        echo $elem . " ";
    echo '<br>';
}

$arr = [1, 2, 3, 4, 5, 6, 7, 7, 9, 10];
echo array_sum($arr) / count($arr);
echo nl2br("\n");

echo array_sum(range(1, 100));
echo nl2br("\n");

$arr2 = [1, 4, 9, 25, 36];
$sqrtsArr = array_map(fn ($elem) => sqrt($elem), $arr2);
printArray($arr2);
printArray($sqrtsArr);

$elems = range('a', 'z');
$ids = range(1, 26);
$arr3 = array_combine($ids, $elems);
printArray($arr3);

$digitsString = '1234567890';
$tmpArr = str_split($digitsString, 2);
$new_result = array_sum($tmpArr);
echo $new_result;
