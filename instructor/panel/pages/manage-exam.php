<?php
if (isset($_SESSION['course']['cou_id']) && isset($_SESSION['course']['cou_name'])) {
     $course_id = $_SESSION['course']['cou_id'];
     $course_name = $_SESSION['course']['cou_name'];
}

?>
<title>Manage Long exams</title>
<style type="text/css">
    .btn-success{
        border-color: transparent;
        background-color: transparent;
        color: black;
    }
    .btn-warning{
        border-color: transparent;
        background-color: transparent;
        color: black;
    }
   
</style>
<div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title bg-slick-carbon text-white">
                <div class="page-title-wrapper" >
                      <div class="page-title-heading">
                          <div class="page-title-icon"><img src="assets/images/exam1.png" height="40" width="40"></div>
                            <div>
                                <?php
                                    if (!empty($course_name)) {?>
                                      <span> Exams Section - Manage Long periodical exams for <?php echo $course_name; ?></span>
                                    <?php 
                                    }else
                                    { ?>
                                     <span>Exams Section - Manage Long periodical exams for differrent course and sections with GNED06 (STS)</span>
                                   <?php }
                                ?>
                                
                                <div class="page-title-subheading">
                                    <nav class="" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="home.php" style="color: white">Dashboard</a></li>
                                        <li class="active breadcrumb-item" aria-current="page" style="color: #3ac47d">Long exam Table</li>
                                        </ol>
                                    </nav> 
                                </div>
                            </div>
                      </div>
                </div>
            </div>     
           
            <div class="col-md-15">
                <div class="float-right">
                <button class="btn btn-warning" data-toggle="modal" data-target="#modalForExam"><i class="fa fa-plus"></i> Add Exam</button>
              </div>
                    <div class="table-responsive" style="padding-left: 15px; padding-right: 15px; padding-bottom: 15px; padding-top: 15px;">
                        <table class="data-table align-middle mb-0 table table-borderless table-hover" id="tableList">
                            <thead>
                            <tr>
                                <th class="text-center">Exam</th>
                                <th class="text-center">Course</th>
                                <th class="text-center">Description</th>
                                <th class="text-center">Time limit</th>  
                                <th class="text-center">No. of Items</th>
                                <th class="text-center">Date Created</th> 
                                <th class="text-center" width="15%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php 
                              if (!empty($course_id)) {
                                 $selExam = $conn->query("SELECT * FROM exam_tbl WHERE cou_id ='$course_id'");
                              }else{
                                $selExam = $conn->query("SELECT * FROM exam_tbl WHERE cou_id IN (SELECT cou_id from course_tbl Where cou_instructor = $id) ORDER BY ex_id DESc ");
                              }

                                if($selExam->rowCount() > 0)
                                {
                                    while ($selExamRow = $selExam->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                            <td class="pl-4"><?php echo $selExamRow['ex_title']; ?></td>
                                            <td class="text-center"><i class="pe-7s-study"></i> 
                                                <?php 
                                                    $courseId =  $selExamRow['cou_id']; 
                                                    $selCourse = $conn->query("SELECT * FROM course_tbl WHERE cou_id='$courseId' ");
                                                    while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) {
                                                        echo $selCourseRow['cou_name'];
                                                    }
                                                ?>
                                            </td>
                                            <td><?php echo $selExamRow['ex_description']; ?></td>
                                            <td class="text-center"><i class="fa fa-clock"></i> <?php echo $selExamRow['ex_time_limit']; ?> minutes</td>
                                            <td class="text-center"><?php echo $selExamRow['ex_questlimit_display']; ?></td>
                                            <td class="text-center"><?php echo $selExamRow['ex_created'];?></td>
                                            <td class="text-center">
                                             <a href="manage-exam.php?id=<?php echo $selExamRow['ex_id']; ?>" type="button" style="color: black; border-color: transparent;" class="mr-2 btn-icon btn-icon-only btn btn-outline-success"><i class="pe-7s-edit"></i> Manage</a>
                                             <button type="button" id="deleteExam" data-id='<?php echo $selExamRow['ex_id']; ?>' style="color: black; border-color: transparent;" class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"></i> Remove</button>
                                            </td>
                                        </tr>
                                    <?php }
                                }
                                
                               ?>
                            </tbody>
                        </table>
                    </div>

            </div>
            <div class="float-right">
                    <button class="btn btn-success"><i class="pe-7s-print"></i> Print table</button>
            </div>       
        </div>
         
<script>
                
$(document).ready(function(){
// $('[data-toggle="tooltip"]').tooltip();
$('.data-table').dataTable({
    "iDisplayLength": 10,
    "aLengthMenu": [
        [5, 10, 25, 50, 100, -1],
        [5, 10, 25, 50, 100, "All"]
    ],
    responsive: true,
    "order": []
});
});
            </script>