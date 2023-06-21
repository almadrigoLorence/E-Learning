<?php 
include("../conn.php");
session_start();
extract($_POST);
$insFedd = $conn->query("UPDATE examinee_tbl SET exmne_nationality = '$nationality' , exmne_religion = '$religion' , exmne_civil_status = '$civilstatus' , exmne_place_of_birth = '$placeofbirth' , exmne_guardian = '$guardian' , exmne_guardian_contact = '$contactguardian' , exmne_address_postal = '$postal' WHERE exmne_id = '$id'" );
	
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