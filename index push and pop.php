<?php
$fruits = array("Apple", "Banana","Cherry");

echo "Original Array: <br>";
print_r($fruits);

array_push($fruits,"Mango");
echo "<br> After Push Operation: <br>";
print_r($fruits);

$pop = array_pop($fruits);
echo "<br> After Pop Operation: <br>";
print_r($fruits);

echo "<br> Popped Element: $pop";
?>