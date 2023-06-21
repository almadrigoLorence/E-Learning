<?php 
include("../../../conn.php");
extract($_POST);

$selectData = $conn->query("SELECT * FROM admin_acc WHERE admin_id = $adminid")->fetch(PDO::FETCH_ASSOC);
$old = $selectData['admin_pass'];

if ($old == $currentPassword) {

	$insFedd = $conn->query("UPDATE admin_acc SET admin_pass = '$newPassword' WHERE admin_id = '$adminid'" );

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