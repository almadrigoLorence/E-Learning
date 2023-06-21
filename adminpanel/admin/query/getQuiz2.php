<?php
include("../../../conn.php");
 if (isset($_POST['quizid'])){
	$quizid = $_POST['quizid'];
	$data=array();
	$query = $conn->query("SELECT * FROM quiz_question_tbl WHERE qqt_id = '$quizid'");
	while($row = $query -> fetch(PDO::FETCH_OBJ)){
	    $data = $row;
	}
	echo json_encode($data);
}
?>