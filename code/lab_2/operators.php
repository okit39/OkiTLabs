<?php
$myNum = 19;
echo nl2br("myNum= $myNum\n");
$answer = $myNum;
echo nl2br("answer = $answer\n");
$answer += 2;
echo nl2br("answer + 2 = $answer\n");
$answer *= 2;
echo nl2br("answer * 2 = $answer\n");
$answer -= 2;
echo nl2br("answer - 2 = $answer\n");
$answer /= 2;
echo nl2br("answer / 2 = $answer\n");
$answer -= $myNum;
echo "answer - myNum = $answer";
