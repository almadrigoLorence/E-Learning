<?php
 include("../../../conn.php");
 extract($_POST);


$updCourse = $conn->query("UPDATE examinee_tbl SET exmne_stud_number='$stud_number', exmne_fullname='$fullname', exmne_surname='$surname', exmne_middle='$middleIni', exmne_course='$course', exmne_gender='$gender', exmne_birthdate='$bdate', exmne_year_level='$year_level', exmne_email='$email', exmne_password='$password' WHERE exmne_id='$examinee_id' ");
if($updCourse)
{
	   $res = array("res" => "success", "exFullname" => $fullname, "exSurname" =>$surname, "exMiddle" => $middleIni);
	 
}
else
{
	   $res = array("res" => "failed");
}



 echo json_encode($res);	
?>