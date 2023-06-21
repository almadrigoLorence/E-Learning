<!DOCTYPE html>
<html>
<head>
	<title>Admin | Dashboard</title>
	<link rel="shorcut icon" type="image/png" href="imag/favicon.png">
</head>


<?php 
session_start();
if(isset($_SESSION['admin']['adminnakalogin']) == true) header("location:home.php");

 ?>

<?php 

include("login-ui/index.php");


 ?>

</html>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/ajax.js"></script>
<script type="text/javascript" src="js/sweetalert.js"></script>