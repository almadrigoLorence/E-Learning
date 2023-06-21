<?php 

// Count All Course
$selCourse = $conn->query("SELECT COUNT(cou_id) as totCourse FROM course_tbl ")->fetch(PDO::FETCH_ASSOC);


// Count All Exam
$selExam = $conn->query("SELECT COUNT(ex_id) as totExam FROM exam_tbl ")->fetch(PDO::FETCH_ASSOC);


//Count All Student
$selStud = $conn->query("SELECT COUNT(exmne_id) as totStud FROM examinee_tbl ")->fetch(PDO::FETCH_ASSOC);


//Count All Assignment
$selAss = $conn->query("SELECT COUNT(ass_id) as totAss FROM assignment_tbl ")->fetch(PDO::FETCH_ASSOC);


// Count All Lessons
$selLesson = $conn->query("SELECT COUNT(lesson_id) as totLess FROM lessons_tbl ")->fetch(PDO::FETCH_ASSOC);


// Count All Announcement
$selAnn = $conn->query("SELECT COUNT(ann_id) as totAnn FROM announcement_tbl ")->fetch(PDO::FETCH_ASSOC);


// Count All Quizzes
$selQuiz = $conn->query("SELECT COUNT(quiz_id) as totQuiz FROM quiz_tbl ")->fetch(PDO::FETCH_ASSOC);


 ?>