<?php
include("../../../conn.php");
 if (isset($_POST['topid'])){
	$topid = $_POST['topid'];
	$data=array();
	$query = $conn->query("SELECT * FROM topics_tbl WHERE topic_id = '$topid'");
	while($row = $query -> fetch(PDO::FETCH_OBJ)){
	    $data = $row;
	}
	echo json_encode($data);
}
?>