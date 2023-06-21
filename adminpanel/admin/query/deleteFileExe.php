<?php
 include("../../../conn.php");
 extract($_POST);
 $selTopic = $conn->query("SELECT * FROM topics_tbl WHERE topic_id='$topicID'")->fetch(PDO::FETCH_ASSOC);
 $files = $selTopic['files'];
 $lesson_id = $selTopic['lesson_id'];
 $delete = $conn->query("UPDATE topics_tbl SET files = '' WHERE topic_id = '$topicID'");
 unlink("../assets/files/module/$lesson_id/$topicID/$files");

 if ($delete) {
 	 $res = array("res" => "success",);
 }else{
 	$res = array("res" => "failed");
 }
 echo json_encode($res);
?>