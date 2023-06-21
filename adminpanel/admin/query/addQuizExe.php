<?php 
 include("../../../conn.php");

 extract($_POST);
 date_default_timezone_set('asia/manila');

 $selCourse = $conn->query("SELECT * FROM quiz_tbl WHERE quiz_title='$quizTitle' ");

 if($courseSelected == "0")
 {
 	$res = array("res" => "noSelectedCourse");
 }
 else if($timeLimit == "0")
 {
 	$res = array("res" => "noSelectedTime");
 }
 else if($quizQuestDipLimit == "" && $quizQuestDipLimit == null)
 {
 	$res = array("res" => "noDisplayLimit");
 }
 else if($selCourse->rowCount() > 0)
 {
	$res = array("res" => "exist", "quizTitle" => $quizTitle);
 }
 else
 {
    $date = date("l jS \of F Y, h:i A");
	$insQuiz = $conn->query("INSERT INTO quiz_tbl(cou_id,quiz_title,quiz_desc,quiz_time_limit,quiz_questlimit_display,quiz_created) VALUES('$courseSelected','$quizTitle','$quizDesc','$timeLimit','$quizQuestDipLimit','$date') ");
	if($insQuiz)
	{
		$res = array("res" => "success", "quizTitle" => $quizTitle);
	}
	else
	{
		$res = array("res" => "failed", "quizTitle" => $quizTitle);
	}


 }


 echo json_encode($res);
 ?>