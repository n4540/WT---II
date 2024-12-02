<?php

$num1 = 45;
$num2 = 78;
$num3 = 23;

if ($num1 > $num2 && $num1 > $num3) {
    echo "The greatest number is: $num1";
} elseif ($num2 > $num1 && $num2 > $num3) {
    echo "The greatest number is: $num2";
} else {
    echo "The greatest number is: $num3";
}
?>
