<?php
 include("../../../conn.php");
 extract($_POST);

if ($QType == 'fint') {

$updCourse = $conn->query("UPDATE exam_question_tbl SET exam_question='$question', exam_ch1='None', exam_ch2='None', exam_ch3='None', exam_ch4='None', exam_answer = '$exam_final' WHERE eqt_id='$examId' ");


}else{

$updCourse = $conn->query("UPDATE exam_question_tbl SET exam_question='$question', exam_ch1='$exam_ch1', exam_ch2='$exam_ch2', exam_ch3='$exam_ch3', exam_ch4='$exam_ch4', exam_answer = '$exam_final' WHERE eqt_id='$examId' ");

}

if($updCourse)
{
	   $res = array("res" => "success" , "data" => $updCourse);
}
else
{
	   $res = array("res" => "failed" , "data" => $updCourse);
}



 echo json_encode($res);	
?>