<?php 
include("../../../conn.php");
extract($_POST);
$selectData = $conn->query("SELECT * FROM instructors_tbl WHERE instructor_id = $insid")->fetch(PDO::FETCH_ASSOC);

$old = $selectData['instructor_pass'];

if ($old == $currentPassword) {

	$insFedd = $conn->query("UPDATE instructors_tbl SET instructor_pass = '$newPassword' WHERE instructor_id = '$insid'" );

 	if($insFedd)
 	{
 		$res = array("res" => "success");
 	}
 	else
 	{
 		$res = array("res" => "failed");
 	}
	
}else{

	$res = array("res" => "old pass doesnt match");

}



 echo json_encode($res);
 ?>