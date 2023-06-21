<?php
 include("../../../conn.php");
 extract($_POST);

$course_name = strtoupper($course_name);
$updCourse = $conn->query("UPDATE course_tbl SET `cou_instructor`='$instructor',`cou_name`='$course_name' WHERE cou_id='$course_id' ");
if($updCourse)
{
	   $res = array("res" => "success", "newCourseName" => $course_name);
}
else
{
	   $res = array("res" => "failed");
}
 echo json_encode($res);	
?>