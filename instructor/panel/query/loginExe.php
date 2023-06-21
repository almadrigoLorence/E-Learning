<?php 
session_start();
 include("../../../conn.php");
 

extract($_POST);

$selAcc = $conn->query("SELECT * FROM instructors_tbl WHERE instructor_email ='$username' AND instructor_pass ='$pass'  ");
$selAccRow = $selAcc->fetch(PDO::FETCH_ASSOC);


if($selAcc->rowCount() > 0)
{
  $_SESSION['instructor'] = array(
  	 'instructor_id' => $selAccRow['instructor_id'],
  	 'instructor_name' => $selAccRow['instructor_fullname'],
  	 'instructornakalogin' => true
  );
  $res = array("res" => "success");

}
else
{
  $res = array("res" => "invalid");
}




 echo json_encode($res);
 ?>