<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "php" ;
$conn= new mysqli($host, $username, $password, $dbname);
if($conn ->connect_error)
{
    die("Ket noi khong thanh k" . $conn->connect_error);
}
?>