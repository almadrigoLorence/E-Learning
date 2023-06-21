<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db   = "thesis";
$conn = null;

try {
  $conn = new PDO("mysql:host={$host};dbname={$db};",$user,$pass);
} catch (Exception $e) {
  
}


 ?>