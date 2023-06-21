<?php 
$exmneId = $_SESSION['examineeSession']['exmne_id'];
$selExmneeData = $conn->query("SELECT * FROM examinee_tbl WHERE exmne_id='$exmneId' ")->fetch(PDO::FETCH_ASSOC);



$exmneCourse =  $selExmneeData['exmne_course'];

$selExam = $conn->query("SELECT * FROM exam_tbl WHERE cou_id='$exmneCourse' ORDER BY ex_id DESC ");

$selQuiz = $conn->query("SELECT * FROM quiz_tbl WHERE quiz_id='$exmneCourse' ORDER BY quiz_id DESC ");

$selLesson = $conn->query("SELECT * FROM lessons_tbl WHERE cou_id='$exmneCourse' ORDER BY lesson_id DESC ");

$selAnn = $conn->query("SELECT * FROM announcement_tbl WHERE course_id='$exmneCourse' ORDER BY ann_id DESC ");

$selAss = $conn->query("SELECT * FROM assignment_tbl WHERE course_id='$exmneCourse' ORDER BY ass_id DESC");

$selAct = $conn->query("SELECT * FROM activities_tbl WHERE cou_id='$exmneCourse' ORDER BY act_id DESC");



 ?>
