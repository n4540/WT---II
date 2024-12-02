<?php 
$fp = fopen('d1.txt', 'w');  
fwrite($fp, 'Updated Content <br>');  
fclose($fp);  

$fp = fopen('d1.txt', 'r');  
echo fread($fp, filesize('d1.txt'));   
echo fgetc($fp);  
fclose($fp);

echo file_get_contents("d1.txt");

echo "File written successfully"; 
?> 