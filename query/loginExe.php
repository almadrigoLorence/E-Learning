<?php 
session_start();
 include("../conn.php");
 

extract($_POST);

$selAcc = $conn->query("SELECT examinee_tbl.*,course_tbl.cou_name FROM examinee_tbl INNER JOIN course_tbl ON examinee_tbl.exmne_course =  course_tbl.cou_id WHERE exmne_stud_number='$username' AND exmne_password='$pass' ");
$selAccRow = $selAcc->fetch(PDO::FETCH_ASSOC);


if($selAcc->rowCount() > 0)
{
  $_SESSION['examineeSession'] = array(
  	 'exmne_id' => $selAccRow['exmne_id'],
     'examineenakalogin' => true,
     'examinee_course' => $selAccRow['cou_name']
  );
  $res = array("res" => "success");

}
else
{
  $res = array("res" => "invalid");
}




 echo json_encode($res);
 ?>