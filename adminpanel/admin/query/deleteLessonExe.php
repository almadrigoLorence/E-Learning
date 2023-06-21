<?php 
 include("../../../conn.php");


extract($_POST);

$delLesson = $conn->query("DELETE  FROM lessons_tbl WHERE lesson_id='$id'  ");
if($delLesson)
{
	$res = array("res" => "success");
}
else
{
	$res = array("res" => "failed");
}


	echo json_encode($res);
 ?>