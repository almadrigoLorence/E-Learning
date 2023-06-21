<?php
session_start();
if (isset($_GET['id'])) {
	$_SESSION['course']['cou_id'] = $_GET['id'];
	echo $_SESSION['course']['cou_id'];
	header('Location: ../home.php?page=mycourse');
}
?>