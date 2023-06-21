<?php
session_start();
include("../conn.php");
$cid = $_SESSION['examineeSession']['exmne_id'];
$selExam = $conn->query("SELECT COUNT(id) AS allnotif FROM notification_tbl where cou_id IN (SELECT exmne_course from examinee_tbl WHERE exmne_id = '$cid')")->fetch(PDO::FETCH_ASSOC);

echo $selExam['allnotif'];

?>