<?php
include("../../../conn.php");
 if (isset($_POST['quizid'])){
	$quizid = $_POST['quizid'];
	$data=array();
	$query = $conn->query("SELECT * FROM exam_question_tbl WHERE eqt_id = '$quizid'");
	while($row = $query -> fetch(PDO::FETCH_OBJ)){
	    $data = $row;
	}
	echo json_encode($data);
}
?>