<?php 
 include("../../../conn.php");


extract($_POST);

$delTopic = $conn->query("DELETE  FROM topics_tbl WHERE topic_id='$id'  ");
if($delTopic)
{
	$res = array("res" => "success");
}
else
{
	$res = array("res" => "failed");
}


	echo json_encode($res);
 ?>