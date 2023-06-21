<?php 
session_start();
include("../../../conn.php");
extract($_POST);
$insCourse = $conn->query("UPDATE myterms SET grade = '$grade' WHERE term_id = '$termid'");
if($insCourse)
{
    $res = array("res" => "success");
}
else
{
    $res = array("res" => "failed");
}
echo json_encode($res);
?>
