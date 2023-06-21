<?php 
 include("../../../conn.php");
 extract($_POST);
 date_default_timezone_set('Asia/Manila');

    $date = date("l jS \of F Y, h:i A");
	$insAct = $conn->query("UPDATE assignment_tbl SET `ass_title`='$actTitle', `ass_desc`='$actDesc', `cou_id`='$courseSelected' WHERE `ass_id`='$act_id' ");
	if($insAct)
	{
		$res = array("res" => "success", "activity" => $actTitle);
	}
	else
	{
		$res = array("res" => "failed", "activity" => $actTitle);
	}


 echo json_encode($res);
 ?> 