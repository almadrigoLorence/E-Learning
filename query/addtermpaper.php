<?php 
include("../conn.php");
session_start();
extract($_POST);
$datenow = date("F d, Y - h:m:s a");
$myid = $_SESSION['examineeSession']['exmne_id'];
$cid = $_SESSION['examineeSession']['examinee_course'];
echo $actTitle;
echo $actDesc;
echo "INSERT INTO myterms(cou_id,term_title,term_desc,exmne_idd,date_uploaded) VALUES('$cid,'$actTitle','$actDesc','$myid','$datenow')";
$insFedd = $conn->query("INSERT INTO myterms(cou_id,term_title,term_desc,exmne_idd,date_uploaded) VALUES('$cid','$actTitle','$actDesc','$myid','$datenow')");

 	if($insFedd)
 	{
 		$res = array("res" => "success");
 	}
 	else
 	{
 		$res = array("res" => "failed");
 	}


 echo json_encode($res);

 ?>