<?php
 include("../../../conn.php");
 extract($_POST);
 $selTopic = $conn->query("SELECT * FROM activities_tbl WHERE act_id='$actID'")->fetch(PDO::FETCH_ASSOC);
 $files = $selTopic['act_file'];
 $foldername = $selTopic['uid'];
 $delete = $conn->query("UPDATE activities_tbl SET act_file = '' WHERE act_id='$actID'");
 unlink("../assets/files/activity/$foldername/$files");

 if ($delete) {
 	 $res = array("res" => "success",);
 }else{
 	$res = array("res" => "failed");
 }
 echo json_encode($res);
?>