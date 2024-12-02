<?php
function factorial($num) {
    $fact = 1;
    for ($i = 1; $i <= $num; $i++) {
        $fact = $fact * $i;
    }
    return $fact;
}

$num = 5;

echo "The factorial of $num is: " . factorial($num);
?>
