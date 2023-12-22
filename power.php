<?php
function power(int $number, int $pow): int {
    if ($pow === 0) {
        return 1;
    } else {
        return $number * power($number, $pow - 1);
    }
}

echo power(5, 2);