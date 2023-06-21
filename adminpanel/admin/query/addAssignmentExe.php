<?php 
 include("../../../conn.php");

 extract($_POST);
 date_default_timezone_set('Asia/Manila');
 $selCourse = $conn->query("SELECT * FROM assignment_tbl WHERE ass_title='$assTitle' ");

 if($courseSelected == "0")
 {
 	$res = array("res" => "noSelectedCourse");
 }
 else if($selCourse->rowCount() > 0)
 {
	$res = array("res" => "exist", "assTitle" => $assTitle);
 }
 else
 {
    $date = date("F d, Y - h:m:s a");
	$insAss = $conn->query("INSERT INTO assignment_tbl(cou_id,ass_title,ass_desc,date_uploaded) VALUES('$courseSelected', '$assTitle','$assDesc','$date') ");
	if($insAss)
	{
		$res = array("res" => "success", "assignment" => $assTitle);
	}
	else
	{
		$res = array("res" => "failed", "assignment" => $assTitle);
	}


 }

 echo json_encode($res);
 ?> 