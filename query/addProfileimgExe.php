<?php 
session_start();
include("../conn.php");

extract($_POST);
$user_id = $_SESSION['examineeSession']['exmne_id'];
$file = $_FILES['profileimg']['name'];
$temp = $_FILES['profileimg']['tmp_name'];
$structure = "../assets/images/$user_id";
$selCourse = $conn->query("SELECT * FROM `examinee_img` WHERE `exmne_id` = '$user_id'");
 if(file_exists($structure) && is_dir($structure)) {
 	
 }else{
 	mkdir($structure, 0777, true);
 }

if($selCourse->rowCount() > 0)
 {
	$insCourse = $conn->query("UPDATE `examinee_img` SET `img` = '$file' WHERE `exmne_id` = '$user_id'");
	move_uploaded_file($temp, "../assets/images/$user_id/".$file);

 }else{

	$insCourse = $conn->query("INSERT INTO `examinee_img` (exmne_id,img) VALUES ('$user_id','$file')");
	move_uploaded_file($temp, "../assets/images/$user_id/".$file);
 }
header("location:../home.php");
exit();
?>
