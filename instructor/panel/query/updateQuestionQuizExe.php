<?php
 include("../../../conn.php");
 extract($_POST);

if ($QType == 'fint') {

$updCourse = $conn->query("UPDATE quiz_question_tbl SET quiz_question='$question', quiz_ch1='None', quiz_ch2='None', quiz_ch3='None', quiz_ch4='None', quiz_answer = '$exam_final' WHERE qqt_id='$examId' ");


}else{

$updCourse = $conn->query("UPDATE quiz_question_tbl SET quiz_question='$question', quiz_ch1='$exam_ch1', quiz_ch2='$exam_ch2', quiz_ch3='$exam_ch3', quiz_ch4='$exam_ch4', quiz_answer = '$exam_final' WHERE qqt_id='$examId' ");

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