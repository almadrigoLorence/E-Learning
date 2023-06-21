<?php 
 include("../../../conn.php");

 extract($_POST);
 date_default_timezone_set('Asia/Manila');
 $datetoday = date('Y-m-d');
 $uniq = uniqid();
 $selCourse = $conn->query("SELECT * FROM lessons_tbl WHERE lesson_title='$lessonTitle' ");

 if($courseSelected == "0")
 {
 	$res = array("res" => "noSelectedCourse");
 }
 else
 {
    $date = date("l jS \of F Y, h:i A");
	$insLesson = $conn->query("INSERT INTO lessons_tbl(cou_id,lesson_title,lesson_desc,date_uploaded,uploader,temp) VALUES('$courseSelected', '$lessonTitle','$lessonDesc','$date','$uploader','$uniq')");
	if($insLesson)
	{
		$res = array("res" => "success", "lesson" => $lessonTitle);
		$addnotif = $conn->query("INSERT INTO notification_tbl(not_desc,uploader,date_upload,cou_id,`uniqid`) VALUES('New Lesson', '$uploader','$datetoday','$courseSelected','$uniq')");
	}
	else
	{
		$res = array("res" => "failed", "lesson" => $lessonTitle);
	}


 }

 echo json_encode($res);
 ?> 