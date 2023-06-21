<?php
$instructorId = $_SESSION['instructor']['instructor_id'];
$selInstructorData = $conn->query("SELECT * FROM instructors_tbl WHERE instructor_id='$instructorId' ")->fetch(PDO::FETCH_ASSOC);

?>