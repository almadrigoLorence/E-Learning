<?php
include("../../../conn.php");
$id = $_GET['id'];
$data=array();
$query = $conn->query("SELECT * FROM instructors_tbl WHERE instructor_id = '$id' LIMIT 1");
while($row = $query -> fetch(PDO::FETCH_OBJ)){
    $data = $row;
}
echo json_encode($data);
?>