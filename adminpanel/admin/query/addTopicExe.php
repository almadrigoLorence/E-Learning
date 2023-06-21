<?php 
 include("../../../conn.php");

extract($_POST);
$file = $_FILES['multimedia']['name'];
$temp = $_FILES['multimedia']['tmp_name'];
$structure = "../assets/files/module/$lessId";
if (file_exists($structure) && is_dir($structure)) {

				
	}else{
	    mkdir($structure, 0777, true);

/*		if (file_exists($structure2) && is_dir($structure2)) {

						
			}else{
			    mkdir($structure2, 0777, true);
						
		}*/
				
}


$selTopic = $conn->query("SELECT * FROM topics_tbl WHERE lesson_id='$lessId' AND topic_title='$topicTitle' ");

if($selTopic->rowCount() > 0)
{
  $res = array("res" => "exist", "msg" => $topicTitle);
}
else
{
	$insTopic = $conn->query("INSERT INTO topics_tbl(lesson_id,topic_title,topic_desc,`files`) VALUES('$lessId','$topicTitle','$topicDesc','$file')");
	if($insTopic)
	{
       $res = array("res" => "success", "msg" => $topicTitle);
       $selinsTopic = $conn->query("SELECT * FROM topics_tbl WHERE lesson_id='$lessId' AND topic_title='$topicTitle'")->fetch(PDO::FETCH_ASSOC);
       $fileID = $selinsTopic['topic_id'];
       $structure2 = "../assets/files/module/$lessId/$fileID";
		if (file_exists($structure2) && is_dir($structure2)) {
				move_uploaded_file($temp, "../assets/files/module/$lessId/$fileID/".$file);

						
			}else{

			    mkdir($structure2, 0777, true);
			    move_uploaded_file($temp, "../assets/files/module/$lessId/$fileID/".$file);

			}
       

	}
	else
	{
       $res = array("res" => "failed");
	}
}

echo json_encode($res); /*
header("location:../home.php?page=manage-lessons-topic&id=".$lessId);*/
 ?> 