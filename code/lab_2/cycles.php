<?php
$counter = 0;
function heap(string $x, int $count): void
{
    $iter = 0;
    while ($iter < $count) {
        $secIter = 0;
        while ($secIter < $iter) {
            echo ("{$x}");
            $secIter += 1;
        };
        $iter += 1;
        echo nl2br("\n");
    };
}

heap('x', 21);
