<?php 
session_start();
 include("../conn.php");
$username = $_POST['username'];
$password = $_POST['pass'];
$ctr = 0;
$exmne_id = "";
$examinee_course = "";
$query = $conn->query("SELECT examinee_tbl.* FROM examinee_tbl LEFT JOIN course_tbl  ON examinee_tbl.exmne_course=course_tbl.cou_name WHERE exmne_stud_number = '$username' AND exmne_password = '$password'");
while($row = $query -> fetch(PDO::FETCH_OBJ)){
  ++$ctr;
  $exmne_id = $row ->exmne_id;
  $examinee_course = $row ->cou_name;
}
if($ctr>0){
  $_SESSION['examineeSession'] = array(
    'exmne_id' => $exmne_id,
    'examineenakalogin' => true,
    'examinee_course' => $examinee_course
  );
  header('Location:../home.php');
}
else{
  // echo $_SERVER["HTTP_REFERER"];
  header("Location:index.php");
}


          // WHERE exmne_stud_number='$username' AND exmne_password='$password' 
//  echo json_encode($res);
 ?>