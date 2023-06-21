<?php 
 include("../../../conn.php");
extract($_POST);
$selExamineeStudNum = $conn->query("SELECT * FROM examinee_tbl WHERE exmne_stud_number='$stud_number' ");
$selExamineeFullname = $conn->query("SELECT * FROM examinee_tbl WHERE exmne_fullname='$fullname' ");
$selExamineeEmail = $conn->query("SELECT * FROM examinee_tbl WHERE exmne_email='$email' ");


if($gender == "0")
{
	$res = array("res" => "noGender");
}
else if($course == "0")
{
	$res = array("res" => "noCourse");
}
else if($year_level == "0")
{
	$res = array("res" => "noLevel");
}
else if($stud_number == "0")
{
	$res = array("res" => "noStudnumber");
}
else if($selExamineeStudNum->rowCount() > 0)
{
	$res = array("res" => "studnumExist", "msg" => $stud_number);
}
else if($selExamineeFullname->rowCount() > 0)
{
	$res = array("res" => "fullnameExist", "msg" => $fullname);
}
else if($selExamineeEmail->rowCount() > 0)
{
	$res = array("res" => "emailExist", "msg" => $email);
}
else
{
	$insData = $conn->query("INSERT INTO examinee_tbl(exmne_stud_number,exmne_fullname,exmne_surname,exmne_middle,exmne_course,exmne_gender,exmne_birthdate,exmne_year_level,exmne_email,exmne_password) VALUES('$stud_number','$fullname','$surname','$middleIni', '$course','$gender','$bdate','$year_level','$email','$password')  ");
	if($insData)
	{
		$res = array("res" => "success", "exFullname" => $fullname, "exSurname" => $surname, "exMiddle" => $middleIni, "exStudNum" => $stud_number);
	}
	else
	{
		$res = array("res" => "failed");
	}
}


echo json_encode($res);
 ?>