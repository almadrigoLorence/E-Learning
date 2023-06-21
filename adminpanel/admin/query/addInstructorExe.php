<?php 
include("../../../conn.php");
// echo 'hrllo';

extract($_POST);
$selInstrctrFullname = $conn->query("SELECT * FROM instructors_tbl WHERE instructor_fullname='$fullname' ");
$selInstrctrEmail = $conn->query("SELECT * FROM instructors_tbl WHERE instructor_email='$email' ");


if($gender == "0")
{
	$res = array("res" => "noGender");
}
else if($selInstrctrFullname->rowCount() > 0)
{
	$res = array("res" => "fullnameExist", "msg" => $fullname);
}
else if($selInstrctrEmail->rowCount() > 0)
{
	$res = array("res" => "emailExist", "msg" => $email);
}
else
{
	$insData = $conn->query("INSERT INTO instructors_tbl (instructor_fullname,instructor_surname,instructor_middle,instructor_gender,instructor_bdate,instructor_email,instructor_pass) VALUES('$fullname','$surname','$middle','$gender','$bdate','$email','$ins_password') ");
	if($insData)
	{
		$res = array("res" => "success", "msg" => $fullname);
	}
	else
	{
		$res = array("res" => "failed");
	}
}


echo json_encode($res);
 ?>