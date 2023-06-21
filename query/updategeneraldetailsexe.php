<?php 
include("../conn.php");
session_start();
extract($_POST);
$insFedd = $conn->query("UPDATE examinee_tbl SET exmne_fullname = '$fname' , exmne_middle = '$middlename' ,  exmne_surname = '$surname' , exmne_address = '$address' , exmne_contact = '$contact' , exmne_email = '$email' , exmne_gender = '$gender' , exmne_age = '$age' WHERE exmne_id = '$id'" );

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