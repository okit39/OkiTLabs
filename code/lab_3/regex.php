<?php
$regex = "/a..b/";
if (preg_match($regex, "ahb acb aeb aeeb adcb axeb") >= 1) {
    echo nl2br("All done =)\n");
} else echo nl2br("Error\n");

//task B
$regexSec = "/(\d)+/";
$str = "a1b2c3";
echo preg_replace_callback($regexSec, fn ($matches) => intval($matches[0]) ** 3, $str);
