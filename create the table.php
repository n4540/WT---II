<?php
echo"Welcome to php<br>";

$servername="localhost";
$username="root";
$password="";
$db="db3";

$conn=new mysqli($servername,$username,$password,$db);
if($conn->connect_error)
{
echo "sorry connect to fail".mysqli_connect_error();

}
else{
    echo"connection established successfully";
}

$sql = "CREATE Table student(id int(2) primary key,name varchar(20) not null)"; 
if ($conn->query($sql) === TRUE) { 
    echo "Table created successfully"; 
} else { 
    echo "Error: " . $conn->error; 
} 

$conn->close(); 

?>
