<?php 
session_start();
include("../../../conn.php");

$count=0;

extract($_POST);
date_default_timezone_set('asia/manila');
// $today = date("l jS \of F Y");
$today = date("F d, Y - h:m:s a");
// $user_id = $_SESSION['admin']['admin_id'];
$insCourse = $conn->query("INSERT INTO announcement_tbl (`ann_title`,`ann_desc`,`ann_start`,`ann_end`,`course_id`,`date_modified`) VALUES ('$title','$description','$date_from','$date_to','$assign_course_array','$today')");
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
