<?php 
 include("../../../conn.php");


extract($_POST);

$delAnn = $conn->query("DELETE  FROM announcement_tbl WHERE ann_id='$id'  ");
if($delAnn)
{
	$res = array("res" => "success");
}
else
{
	$res = array("res" => "failed");
}



	echo json_encode($res);
 ?>