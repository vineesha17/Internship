<?php
$servername = "localhost";
$username = "root";
$password = "newpassword123";
$database = "studentdb";

$conn = new mysqli($servername, $username, $password, $database);

if(!$conn){
    die("Connection failed: ". mysqli_connnect_error());
}
echo "Connected successfully<br><br>";


$table = "CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY;
    name VARCHAR(50),
    email VARCHAR(50),
    age INT
)";




?>