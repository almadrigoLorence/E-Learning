<?php 
session_start();
include("../../../conn.php");

extract($_POST);
$user_id = $_SESSION['instructor']['instructor_id'];
$file = $_FILES['profileimg']['name'];
$temp = $_FILES['profileimg']['tmp_name'];
$structure = "../assets/images/$user_id";
$selCourse = $conn->query("SELECT * FROM `instructor_img` WHERE `userid` = '$user_id'");
 if(file_exists($structure) && is_dir($structure)) {
 	
 }else{
 	mkdir($structure, 0777, true);
 }

if($selCourse->rowCount() > 0)
 {
	$insCourse = $conn->query("UPDATE `instructor_img` SET `img` = '$file' WHERE `userid` = '$user_id'");
	move_uploaded_file($temp, "../assets/images/$user_id/".$file);

 }else{

	$insCourse = $conn->query("INSERT INTO `instructor_img` (userid,img) VALUES ('$user_id','$file')");
	move_uploaded_file($temp, "../assets/images/$user_id/".$file);
 }
header("location:../home.php?page=view-profile");
exit();
?>
