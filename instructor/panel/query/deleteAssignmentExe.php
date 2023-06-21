<?php 
 include("../../../conn.php");


extract($_POST);

$delAssignment = $conn->query("DELETE  FROM assignment_tbl WHERE ass_id='$id'  ");
if($delAssignment)
{
	$res = array("res" => "success");
}
else
{
	$res = array("res" => "failed");
}
	echo json_encode($res);
 ?>