<!DOCTYPE html> 
<html> 
<body> 

<?php 
$numbers = array(40, 61, 2, 22, 13); 
sort($numbers); 

$length = count($numbers); 
for($x = 0; $x < $length; $x++) { 
	echo $numbers[$x]; 
	echo "<br>"; 
} 
?> 

</body> 
</html>
