<!DOCTYPE html>
<html>
<head>
  <link rel="icon" type="image/png" href="img/favicon2.png">
  <link href="css/mycss.css" rel="stylesheet">
</head>


<?php 
session_start();

if(!isset($_SESSION['admin']['adminnakalogin']) == true) header("location:index.php");


 ?>
<?php include("../../conn.php"); ?>
<?php include("includes/header.php"); ?>      
<?php include("includes/ui-theme.php"); ?>


<div class="app-main">
<?php include("includes/sidebar.php"); ?>


<?php 
   @$page = $_GET['page'];


   if($page != '')
   {
     if($page == "add-course")
     {
     include("pages/add-course.php");
     }
     else if($page == "add-activity")
     {
     include("pages/add-activity.php");
     }
     else if($page == "edit-activities")
     {
     include("pages/edit-activities.php");
     }
     else if($page == "add-assignment")
     {
     include("pages/add-assignment.php");
     }
     else if($page == "edit-assignment")
     {
     include("pages/edit-assignment.php");
     }
     else if($page == "manage-course")
     {
     	include("pages/manage-course.php");
     }
     else if($page == "manage-exam")
     {
      include("pages/manage-exam.php");
     }
     else if($page == "manage-quizzes")
     {
      include("pages/manage-quizzes.php");
     }
     else if($page == "manage-activities")
     {
      include("pages/manage-activities.php");
     }
     else if($page == "manage-assignments")
     {
      include("pages/manage-assignments.php");
     }
      else if($page == "manage-lessons")
     {
      include("pages/manage-lessons.php");
     }
     else if($page == "manage-lessons-topic")
     {
      include("pages/manage-lessons-topic.php");
     }
     else if($page == "manage-students")
     {
      include("pages/manage-students.php");
     }
     else if($page == "manage-instructor")
     {
      include("pages/manage-instructor.php");
     }
     else if($page == "report-log")
     {
      include("pages/report-log.php");
     }
     else if($page == "feedbacks")
     {
      include("pages/feedbacks.php");
     }
     else if($page == "overall-result")
     {
      include("pages/overall-result.php");
     }
     else if($page == "announcement")
     {
      include("pages/announcement.php");
     }
     else if($page == "post-announcement")
     {
      include("pages/post-announcement.php");
     }
     else if($page == "change-pass")
     {
      include("pages/change-pass.php");
     }
    else if($page == "course-sec-list")
    {
      include("pages/course-sec-list.php");
    }
    else if($page == "home")
    {
      include("pages/home.php");
    }
     else if($page == "view-profile")
     {
      include("pages/view-profile.php");
     }
     else if($page == "reaction-papers")
     {
      include("pages/reaction-papers.php");
     }
     else if ($page == "viewtermpapers") 
     {
       include("pages/viewtermpapers.php");
     }
   }
   else 
   {
     include("pages/home.php"); 
   }


 ?> 

<?php include("includes/footer.php"); ?>

<?php include("includes/modals.php"); ?>
</html>