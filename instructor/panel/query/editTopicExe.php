<?php 
 include("../../../conn.php");
 extract($_POST);
 $selTopic = $conn->query("SELECT * FROM topics_tbl WHERE  topic_title='$topicTitle' and lesson_id = '$lsnid' and topic_id != '$topic_id' ");

if($selTopic->rowCount() > 0)
{
  $res = array("res" => "exist", "msg" => $topicTitle);
}else{

	 if(!empty($_FILES['multimedia']['name'])){

		$file = $_FILES['multimedia']['name'];
		$temp = $_FILES['multimedia']['tmp_name'];

	 	$selTopic2 = $conn->query("SELECT * FROM topics_tbl WHERE topic_id='$topic_id'")->fetch(PDO::FETCH_ASSOC);
	 	$lessonid = $selTopic2['lesson_id'];
	 	$oldfile = $selTopic2['files'];
	 	if (!empty($oldfile)) {
	 		unlink("../assets/files/module/$lessonid/$topic_id/$oldfile");
	 	}
		$insAct = $conn->query("UPDATE topics_tbl SET topic_title='$topicTitle', topic_desc='$topicDesc', files = '$file' WHERE topic_id='$topic_id'");
		if($insAct)
		{
			$res = array("res" => "success", "activity" => $topicTitle , "actID" => $topic_id);
			
			move_uploaded_file($temp, "../assets/files/module/$lessonid/$topic_id/".$file);
		}
		else
		{
			$res = array("res" => "failed", "activity" => $topicTitle);
		}

	}else{
		$insAct = $conn->query("UPDATE topics_tbl SET topic_title='$topicTitle', topic_desc='$topicDesc' WHERE topic_id='$topic_id'");
		if($insAct)
		{
			$res = array("res" => "success", "activity" => $topicTitle , "actID" => $topic_id);

		}
		else
		{
			$res = array("res" => "failed", "activity" => $topicTitle);
		}

	}
}
 echo json_encode($res);
 ?> 