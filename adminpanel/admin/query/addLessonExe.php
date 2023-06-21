<?php 
 include("../../../conn.php");

 extract($_POST);
 date_default_timezone_set('Asia/Manila');
 $selCourse = $conn->query("SELECT * FROM lessons_tbl WHERE lesson_title='$lessonTitle' ");

 if($courseSelected == "0")
 {
 	$res = array("res" => "noSelectedCourse");
 }
 else if($selCourse->rowCount() > 0)
 {
	$res = array("res" => "exist", "lessonTitle" => $lessonTitle);
 }
 else
 {
    $date = date("F d, Y - h:m:s a");
	$insLesson = $conn->query("INSERT INTO lessons_tbl(cou_id,lesson_title,lesson_desc,date_uploaded) VALUES('$courseSelected', '$lessonTitle','$lessonDesc','$date') ");
	if($insLesson)
	{
		$res = array("res" => "success", "lesson" => $lessonTitle);
		$addnotif = $conn->query("INSERT INTO notification_tbl(not_desc,uploader,date_upload,cou_id,`uniqid`) VALUES('New Lesson', 'admin','$datetoday','$courseSelected','$uniq')");
	}
	else
	{
		$res = array("res" => "failed", "lesson" => $lessonTitle);
	}


 }

 echo json_encode($res);
 ?> 