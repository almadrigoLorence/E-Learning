<?php 
 include("../../../conn.php");
 
 extract($_POST);
date_default_timezone_set('asia/manila');
 $updQuiz = $conn->query("UPDATE quiz_tbl SET `cou_id`='$courseSelected', `quiz_title`='$quizTitle', `quiz_desc`='$quizDesc', `quiz_time_limit`='$quizLimit', `quiz_questlimit_display`='$quizQuestDipLimit'  WHERE  `quiz_id`='$quizId' ");

 if($updQuiz)
 {
   $res = array("res" => "success", "msg" => $quizTitle);
 }
 else
 {
   $res = array("res" => "failed");
 }

 echo json_encode($res);
 ?>