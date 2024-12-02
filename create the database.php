<?php
echo"Welcome to php<br>";

$servername="localhost";
$username="root";
$password="";

$conn=new mysqli($servername,$username,$password);
if($conn->connect_error)
{
echo "sorry connect to fail".mysqli_connect_error();

}
else{
    echo"connection established successfully";
}

$sql = "CREATE DATABASE db3"; 
 if ($conn->query($sql) === TRUE) { 
    echo "Database with name DB1"; 
 } else { 
    echo "Error: " . $conn->error;  } 

 $conn->close(); 

?>
