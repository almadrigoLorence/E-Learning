<?php 
 include("../../../conn.php");
 extract($_POST);
 date_default_timezone_set('Asia/Manila');
	if (!empty($_FILES['multimedia']['name'])) {
	 	$file = $_FILES['multimedia']['name'];
		$temp = $_FILES['multimedia']['tmp_name'];

		$insAct = $conn->query("UPDATE activities_tbl SET `act_title`='$actTitle', `act_desc`='$actDesc', `cou_id`='$courseSelected' , act_file ='$file' WHERE `act_id`='$act_id' ");
		if($insAct)
		{
			$res = array("res" => "success", "activity" => $actTitle , "actid" => $act_id);
			if (!empty($act_file)) {
				unlink("../assets/files/activity/$foldername/$act_file");
			}
			move_uploaded_file($temp, "../assets/files/activity/$foldername/".$file);
		}
		else
		{
			$res = array("res" => "failed", "activity" => $actTitle , "actid" => $act_id);
		}


	}else{
		$insAct = $conn->query("UPDATE activities_tbl SET `act_title`='$actTitle', `act_desc`='$actDesc', `cou_id`='$courseSelected' WHERE `act_id`='$act_id' ");
		if($insAct)
		{
			$res = array("res" => "success", "activity" => $actTitle , "actid" => $act_id);
		}
		else
		{
			$res = array("res" => "failed", "activity" => $actTitle , "actid" => $act_id);
		}
	}


 echo json_encode($res);
 ?> 