<?php 
 include("../../../conn.php");
 
 extract($_POST);
date_default_timezone_set('asia/manila');
$today = date("l jS \of F Y h:i A");
 $updLess = $conn->query("UPDATE lessons_tbl SET `cou_id`='$courseSelected', `lesson_title`='$lessonTitle', `lesson_desc`='$lessonDesc' WHERE  `lesson_id`='$lessId' ");

 if($updLess)
 {
   $res = array("res" => "success", "msg" => $lessonTitle);
 }
 else
 {
   $res = array("res" => "failed");
 }

 echo json_encode($res);
 ?>