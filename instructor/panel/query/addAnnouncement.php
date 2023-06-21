<?php 
session_start();
include("../../../conn.php");

$count=0;

extract($_POST);
date_default_timezone_set('asia/manila');
$today = date("F d, Y - h:m:s a");
$user_id = $_SESSION['instructor']['instructor_id'];
$insCourse = $conn->query("INSERT INTO announcement_tbl (`ann_title`,`ann_desc`,`ann_start`,`ann_end`,`course_id`,`date_modified`,`modified_by`) VALUES ('$title','$annDesc','$date_from','$date_to','$assign_course_array','$today','$user_id')");
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
