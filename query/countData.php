<?php

// Count all Exams
$selAnnouncement = $conn->query("SELECT COUNT(ann_id) as totAnn FROM announcement_tbl ")->fetch(PDO::FETCH_ASSOC);


// Count All Uploaded Files
$selLes = $conn->query("SELECT COUNT(lesson_id) as totLes FROM lessons_tbl ")->fetch(PDO::FETCH_ASSOC);



?>