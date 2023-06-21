<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" type="image/png" href="img/favicon1.png">
  <link href="css/mycss.css" rel="stylesheet">
</head>


<?php 
session_start();
 ?>
<?php include("conn.php"); ?> 
<?php include("includes/header.php"); ?>     
<?php include("includes/ui-theme.php"); ?>
<div class="app-main">

<?php 
   @$page = $_GET['page'];

   if($page != '')
   {
     if($page == "lesson")
     {
       include("pages/lesson-page.php");
     }
     else if($page == "result")
     {
      include("pages/result.php");
     }
     else if($page == "exam")
     {
      include("pages/exam.php");
     }
     else if($page == "announcements")
     {
      include("pages/announcements.php");
     }
     else if($page == "announcements-index")
     {
      include("pages/announcements-index.php");
     }
     else if($page == "activities")
     {
      include("pages/activities.php");
     }
     else if($page == "activity")
     {
      include("pages/activity-page.php");
     }
     else if($page == "assignments")
     {
      include("pages/assignments.php");
     }
     else if($page == "assignment-page")
     {
      include("pages/assignment-page.php");
     }
     else if($page == "quiz")
     {
      include("pages/quiz.php");
     }
     else if($page == "long-exam")
     {
      include("pages/long-exam.php");
     }
     else if($page == "long-exam-history")
     {
      include("pages/long-exam-history.php");
     }
     else if($page == "edit-profile")
     {
      include("pages/edit-profile.php");
     }
      else if($page == "edit-profile2")
     {
      include("pages/edit-profile2.php");
     }
      else if($page == "view-profile")
     {
      include("pages/view-profile.php");
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
