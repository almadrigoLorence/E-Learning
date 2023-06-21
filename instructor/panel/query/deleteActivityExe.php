<?php 
 include("../../../conn.php");


extract($_POST);

$delActivity = $conn->query("DELETE  FROM activities_tbl WHERE act_id='$id'  ");
if($delActivity)
{
	$res = array("res" => "success");
}
else
{
	$res = array("res" => "failed");
}


	echo json_encode($res);
 ?>