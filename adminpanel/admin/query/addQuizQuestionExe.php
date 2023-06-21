<?php 
 include("../../../conn.php");

extract($_POST);

$selQuest = $conn->query("SELECT * FROM quiz_question_tbl WHERE quiz_id='$examId' AND quiz_question='$question' ");
if($selQuest->rowCount() > 0)
{
  $res = array("res" => "exist", "msg" => $question);
}
else
{	
	if ($etype == 'fint') {
		$insQuest = $conn->query("INSERT INTO quiz_question_tbl(quiz_id,quiz_question,quiz_ch1,quiz_ch2,quiz_ch3,quiz_ch4,quiz_answer,quiz_type) VALUES('$examId','$question','None','None','None','None','$correctAnswer','$etype') ");
		if($insQuest)
		{
	       $res = array("res" => "success", "msg" => $question);
		}
		else
		{
	       $res = array("res" => "failed");
		}
	}else{
		$insQuest = $conn->query("INSERT INTO quiz_question_tbl(quiz_id,quiz_question,quiz_ch1,quiz_ch2,quiz_ch3,quiz_ch4,quiz_answer,quiz_type) VALUES('$examId','$question','$choice_A','$choice_B','$choice_C','$choice_D','$correctAnswer','$etype') ");

		if($insQuest)
		{
	       $res = array("res" => "success", "msg" => $question);
		}
		else
		{
	       $res = array("res" => "failed");
		}
	}
}

echo json_encode($res);
 ?>