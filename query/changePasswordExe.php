<?php 
include("../conn.php");
session_start();
extract($_POST);
$selectData = $conn->query("SELECT * FROM examinee_tbl WHERE exmne_id = $examineeid")->fetch(PDO::FETCH_ASSOC);

$old = $selectData['exmne_password'];

if ($old == $currentPassword) {

	$insFedd = $conn->query("UPDATE examinee_tbl SET exmne_password = '$newPassword' WHERE exmne_id = '$examineeid'" );

 	if($insFedd)
 	{
 		$res = array("res" => "success");
 	}
 	else
 	{
 		$res = array("res" => "failed");
 	}
	
}else{

	$res = array("res" => "Incorrect Old password or Password doesnt matches");

}



 echo json_encode($res);
 ?>