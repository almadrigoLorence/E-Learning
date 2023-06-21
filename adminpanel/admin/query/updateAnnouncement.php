<?php 
session_start();
include("../../../conn.php");
extract($_POST);
date_default_timezone_set('asia/manila');
$today = date("l jS \of F Y h:i A");
$user_id = $_SESSION['admin']['admin_id'];
$insCourse = $conn->query("UPDATE announcement_tbl SET `ann_title`='$title',`ann_desc`='$description',`ann_start`='$date_from',`ann_end`='$date_to',`course_id`='$update_assign_course_array',`date_modified`='$today' WHERE `ann_id`='$announcement_id'");
if($insCourse)
{
    $res = array("res" => "success", "course_name" => '');
}
else
{
    $res = array("res" => "failed", "course_name" => '');
}
echo json_encode($res);
?>
