<?php 
 include("../../../conn.php");

 extract($_POST);
 $filename = $_FILES['multimedia']['name'];
 $temp = $_FILES['multimedia']['tmp_name'];
 $uniqueid = uniqid();
 date_default_timezone_set('Asia/Manila');
 $selCourse = $conn->query("SELECT * FROM activities_tbl WHERE act_title='$actTitle' ");

 if($courseSelected == "0")
 {
 	$res = array("res" => "noSelectedCourse");
 }
 else if($selCourse->rowCount() > 0)
 {
	$res = array("res" => "exist", "actTitle" => $actTitle);
 }
 else
 {
    /*$date = date("l jS \of F Y, h:i A");*/
	$insAct = $conn->query("INSERT INTO activities_tbl(cou_id,act_title,act_desc,act_file,uid) VALUES('$courseSelected', '$actTitle','$actDesc','$filename','$uniqueid')");
	if($insAct)
	{
		$res = array("res" => "success", "activity" => $actTitle);

		$structure = "../assets/files/activity/$uniqueid";
		if (file_exists($structure) && is_dir($structure)) {

			move_uploaded_file($temp, "../assets/files/activity/$uniqueid/".$filename);
					
		}else{
		    mkdir($structure, 0777, true);

		    move_uploaded_file($temp, "../assets/files/activity/$uniqueid/".$filename);

		}
		$datetoday = date("l jS \of F Y, h:i A");
		$uniq = uniqid();
		$addnotif = $conn->query("INSERT INTO notification_tbl(not_desc,date_upload,cou_id,`uniqid`) VALUES('New Activity','$datetoday','$courseSelected','$uniq')");


	}
	else
	{
		$res = array("res" => "failed", "activity" => $actTitle);
	}


 }

 echo json_encode($res);
 ?>  