<?php
$selExAttempt = $conn->query("SELECT * FROM quiz_attempt WHERE exmne_id='$exmne_id' AND quiz_id='$quiz_id'  ");

$selAns = $conn->query("SELECT * FROM quiz_answers WHERE axmne_id='$exmne_id' AND quiz_id='$quiz_id' ");


if($selExAttempt->rowCount() > 0)
{
	$res = array("res" => "alreadyTaken");
}
else if($selAns->rowCount() > 0)
{
	$updLastAns = $conn->query("UPDATE quiz_answers SET quiz_status='old' WHERE axmne_id='$exmne_id' AND quiz_id='$quiz_id'  ");
	if($updLastAns)
	{
		foreach ($_REQUEST['answer'] as $key => $value) {
			 $value = $value['correct'];
		  	 $insAns = $conn->query("INSERT INTO quiz_answers(axmne_id,quiz_id,quest_id,quiz_answer) VALUES('$exmne_id','$quiz_id','$key','$value')");
		}
		if($insAns)
		{
			 $insAttempt = $conn->query("INSERT INTO quiz_attempt(exmne_id,quiz_id)  VALUES('$exmne_id','$quiz_id') ");
			 if($insAttempt)
			 {
				 $res = array("res" => "success");
			 }
			 else
			 {
				 $res = array("res" => "failed");
			 }
		}
		else
		{
			 $res = array("res" => "failed");
		}
	}
}
else
{

		foreach ($_REQUEST['answer'] as $key => $value) {
			 $value = $value['correct'];
		  	 $insAns = $conn->query("INSERT INTO quiz_answers(axmne_id,quiz_id,quest_id,quiz_answer) VALUES('$exmne_id','$quiz_id','$key','$value')");
		}
		if($insAns)
		{
			 $insAttempt = $conn->query("INSERT INTO quiz_attempt(exmne_id,quiz_id)  VALUES('$exmne_id','$quiz_id') ");
			 if($insAttempt)
			 {
				 $res = array("res" => "success");
			 }
			 else
			 {
				 $res = array("res" => "failed");
			 }
		}
		else
		{
			 $res = array("res" => "failed");
		}


}

?>