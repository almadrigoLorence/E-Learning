<?php
$adminId = $_SESSION['admin']['admin_id'];
$selAdminData = $conn->query("SELECT * FROM admin_acc WHERE admin_id='$adminId' ")->fetch(PDO::FETCH_ASSOC);

$selAnn = $conn->query("SELECT * FROM announcement_tbl WHERE course_id='$exmneCourse' ORDER BY ann_id DESC ");
?>