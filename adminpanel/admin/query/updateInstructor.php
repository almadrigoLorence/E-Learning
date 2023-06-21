<?php
 include("../../../conn.php");
 extract($_POST);
$updInstructor = $conn->query("UPDATE instructors_tbl SET instructor_fullname='$tFullname', instructor_surname='$tSurname', instructor_middle='$tMiddle', instructor_gender='$tGender', instructor_bdate='$exBdate', instructor_email='$tEmail', instructor_pass='$tPass' WHERE instructor_id='$instructor_id' ");
if($updInstructor)
{
	   $res = array("res" => "success", "tFullname" => $tFullname, "tSurname" => $tSurname, "tMiddle" => $tMiddle);
}
else
{
	   $res = array("res" => "failed");
}



 echo json_encode($res);	
?>