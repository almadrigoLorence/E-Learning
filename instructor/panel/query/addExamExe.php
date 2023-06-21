<?php 
 include("../../../conn.php");

 extract($_POST);
 date_default_timezone_set('asia/manila');

 $selCourse = $conn->query("SELECT * FROM exam_tbl WHERE ex_title='$examTitle' ");

 if($courseSelected == "0")
 {
 	$res = array("res" => "noSelectedCourse");
 }
 else if($timeLimit == "0")
 {
 	$res = array("res" => "noSelectedTime");
 }
 else if($examQuestDipLimit == "" && $examQuestDipLimit == null)
 {
 	$res = array("res" => "noDisplayLimit");
 }
 else if($selCourse->rowCount() > 0)
 {
	$res = array("res" => "exist", "examTitle" => $examTitle);
 }
 else
 {
    $date = date("l jS \of F Y, h:i A");
	$insExam = $conn->query("INSERT INTO exam_tbl(cou_id,ex_title,ex_time_limit,ex_questlimit_display,ex_description,ex_created) VALUES('$courseSelected','$examTitle','$timeLimit','$examQuestDipLimit','$examDesc','$date') ");
	if($insExam)
	{
		$res = array("res" => "success", "examTitle" => $examTitle);
		$datetoday = date('Y-m-d');
		$uniq = uniqid();
		$addnotif = $conn->query("INSERT INTO notification_tbl(not_desc,date_upload,cou_id,`uniqid`) VALUES('New Exam','$datetoday','$courseSelected','$uniq')");
	}
	else
	{
		$res = array("res" => "failed", "examTitle" => $examTitle);
	}


 }


 echo json_encode($res);
 ?>