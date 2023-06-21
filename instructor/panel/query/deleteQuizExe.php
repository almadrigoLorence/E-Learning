<?php 
 include("../../../conn.php");


extract($_POST);

$delQuiz = $conn->query("DELETE  FROM quiz_tbl WHERE quiz_id='$quizid'  ");
if($delQuiz)
{
	$res = array("res" => "success");
}
else
{
	$res = array("res" => "failed");
}


	echo json_encode($res);
 ?>